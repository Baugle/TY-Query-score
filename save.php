<?php
header("Content-Type: application/json; charset=UTF-8");

// 获取前端传来的 JSON
$raw = file_get_contents("php://input");
$data = json_decode($raw, true);

// 基本信息
$id = $data["id"] ?? "unknown";
$name = $data["name"] ?? "";
$school = $data["school"] ?? "";

// 学科列表
$subjects = ["语文","数学","英语","政治","历史","地理","物理","化学","生物","总分"];

$original = [];
$assigned = [];

foreach ($subjects as $sub) {
    $original[] = [
        "subject"    => $sub,
        "score"      => intval($data["o_".$sub."_score"] ?? 0),
        "classRank"  => intval($data["o_".$sub."_classRank"] ?? 0),
        "schoolRank" => intval($data["o_".$sub."_schoolRank"] ?? 0),
        "examRank"   => intval($data["o_".$sub."_examRank"] ?? 0)
    ];

    // 语文、数学、英语在赋分中保持和原始一致
    if (in_array($sub, ["语文","数学","英语"])) {
        $assigned[] = [
            "subject"    => $sub,
            "score"      => intval($data["o_".$sub."_score"] ?? 0),
            "classRank"  => intval($data["o_".$sub."_classRank"] ?? 0),
            "schoolRank" => intval($data["o_".$sub."_schoolRank"] ?? 0),
            "examRank"   => intval($data["o_".$sub."_examRank"] ?? 0)
        ];
    } else {
        $assigned[] = [
            "subject"    => $sub,
            "score"      => intval($data["a_".$sub."_score"] ?? 0),
            "classRank"  => intval($data["a_".$sub."_classRank"] ?? 0),
            "schoolRank" => intval($data["a_".$sub."_schoolRank"] ?? 0),
            "examRank"   => intval($data["a_".$sub."_examRank"] ?? 0)
        ];
    }
}

// 最终 JSON 结构
$record = [
    "name"     => $name,
    "id"       => $id,
    "school"   => $school,
    "original" => $original,
    "assigned" => $assigned
];

// 确保 data 目录存在
$dir = __DIR__ . "/data";
if (!is_dir($dir)) {
    mkdir($dir, 0755, true);
}

// 保存到 json 文件（文件名就是考号）
$file = $dir . "/" . $id . ".json";
if (file_put_contents($file, json_encode($record, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE))) {
    echo json_encode(["message" => "✅ 成绩已保存为 " . $id . ".json"]);
} else {
    echo json_encode(["message" => "❌ 保存失败，请检查 data 目录权限"]);
}
?>
