# 資料庫規劃
## 共6張資料表

1.頁尾
bottom
| name   | type     | pk      |default   |A_I     |note      |
| -------| -------- | --------| -------- |-------- | --------|
| id     |int(11)  | yes     | yes      |yes     |流水號     |
|bottom  |text      |         |          |        |          |   

2.icon
icon
| name   | type     |default  |A_I       |note      |
| -------| -------- | --------| -------- | -------- |
| id     |int(11)   |         | yes      |流水號     |
|icon    |text      |         |          |iocn      |
| sh     |int(1)    |         |          |顯示      |

3.基本資料
info
| name   | type     |default  |A_I       |note      |
| -------| -------- | --------| -------- | -------- |
| id     |int(11)   |         | yes      |流水號     |
| item   |text      |         |          |項目      |
|text    |text      |         |          |內容      |
| sh     |int(1)    |         |          |顯示      |

4.作品集
poedit
| name   | type     |default  |A_I       |note      |
| -------| -------- | --------| -------- | -------- |
| id     |int(11)   |         | yes      |流水號    |
| img    |text      |         |          |照片      |
|href    |text      |         |          |連結      |
| sh     |int(1)    |         |          |顯示      |
| parent |          |         |          |分類      |

5.個人大頭照
photo
| name   | type     |default  |A_I       |note      |
| -------| -------- | --------| -------- | -------- |
| id     |int(11)   |         | yes      |流水號     |
| img    |text      |         |          |照片      |
|text    |text      |         |          |替代文字   |
| sh     |int(1)    |         |          |顯示      |
