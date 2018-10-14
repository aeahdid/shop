練習用に作ったECサイトです。

##主な機能
・商品の販売
・商品の購入
・会員登録機能（かんたん注文機能）
・ログイン機能
・注文データCSVエクスポート

## 環境・言語
・Windows 10
・Visual Studio Code

・php
・xampp（Apache・MySQL）

## 使い方
・cd xampp
・cd htdocs
・git clone https://github.com/aeahdid/shop.git
・localhost/shop/shop_list.php

＊DATABASE名を「shop02」で作成しているため、MySQLで作成が必要
以下DATABASE構造

#DATABASE名
・shop02

#TABLE一覧
・dat_member
(code(int),date(datatime),password(varcher),name(varcher),email(varcher),postal1(varcher),postal2(varcher),address(varcher),tel(varcher),danjo(int(1=男、2=女)),born(int))

・dat_sales
(code(int),date(datatime),password(varcher),name(varcher),email(varcher),postal1(varcher),postal2(varcher),address(varcher),tel(varcher))

・dat_sales_product
(code(int),code_sales(int),code_product(int),price(int),quantity(int))

・mst_product
(code(int),name(varcher),price(int),gazou(varchar))

・mst_staff
(code(int),name(varchar),password(varchar))
