# TY-Query-score

天一大联考**仿制**查分网站，可以**自定义考号分数排名**等参数，通过在本地生成json文件来进行查找，不依赖数据库
----------------------------------------------------------------------------------------------------

# 目录：

- [如何部署](https://github.com/Baugle/TY-Query-score?tab=readme-ov-file#如何部署)
- [天一大联考的优点](https://github.com/Baugle/TY-Query-score?tab=readme-ov-file#天一大联考的优点)
- [截图预览](https://github.com/Baugle/TY-Query-score?tab=readme-ov-file#截图预览)

---

## 如何部署

- 首先需要一台服务器，你可以申请甲骨文或亚马逊的免费服务器，当然也可以付费租一台。
- 通过[MobaXterm](https://mobaxterm.mobatek.net/)或其他的SSH工具连接到你的服务器
- 使用sudo等工具在服务器安装**Nginx**和**PHP**
- 在 **/var/www/html/** 目录下将文件Copy过去(当然你也可以放在其他目录，这个目录是Nginx的目录，只是为了方便)
- 在 **/var/www/html/data/** 这个文件使用 **sudo chmod 777 /var/www/html/data** 命令，这是因为需要在data文件夹内写入录入的json数据，必须要有写入的权限
- 完成后检验网站

---

## 天一大联考的优点

- [x] 🎉出题**非常差**，不如拿本53给我做
- [x] 🍀答案泄露**特别严重**，10元一份答案，让我们这些诚实派怎么活？
- [x] ✨是不是给领导**塞钱**了？好学校差学校都不考，就我们考？**吃回扣**呢？
- [x] 🦑查分网站到现在还是**http**不是https，而且非常简陋，服务器特别差，你们程序员吃屎了？
- [x] 🛠改卷老师**特别无赖**，完全就是**按心情给分**

---

# 截图预览

<img width="2559" height="1343" alt="image" src="https://github.com/user-attachments/assets/38651b85-59a2-42f2-b140-cc85a2e6ab4f" />
<img width="2529" height="1345" alt="image" src="https://github.com/user-attachments/assets/c590ab8a-48f1-46c6-8792-a2e405a91a19" />
<img width="947" height="1267" alt="image" src="https://github.com/user-attachments/assets/8c355055-cc30-4434-b019-97e1e294be46" />
<img width="682" height="996" alt="image" src="https://github.com/user-attachments/assets/86fbe79d-6836-441d-92f4-10db6b70240c" />
<img width="802" height="1322" alt="image" src="https://github.com/user-attachments/assets/9ace1522-50d5-466c-b149-1a956cd46ac1" />

---


