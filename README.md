## 練習用に作ったECサイトです。

## 主な機能
> ・商品の販売<br>
> ・商品の購入<br>
> ・会員登録機能（かんたん注文機能）<br>
> ・ログイン機能<br>
> ・注文データCSVエクスポート<br>

## 環境・言語
> ・Windows 10<br>
> ・Visual Studio Code<br>

> ・php<br>
> ・xampp（Apache・MySQL）<br>

## 使い方
> #### cd xampp
> #### cd htdocs
> #### git clone https://github.com/aeahdid/shop.git
> #### localhost/shop/shop_list.php

### 注）DATABASE名を「shop02」で作成しているため、MySQLで作成が必要

### DATABASE名
> #### ・shop02

### TABLE一覧
> #### dat_member
>>code(int)<br>
>>date(datatime)<br> 
>>password(varcher)<br> 
>>name(varcher)<br>
>>email(varcher)<br>
>>postal1(varcher)<br>
>>postal2(varcher)<br>
>>address(varcher)<br>
>>tel(varcher)<br>
>>danjo(int(1=男、2=女))<br> 
>>born(int)<br>

> #### dat_sales
>>code(int)<br>
>>date(datatime)<br>
>>password(varcher)<br>
>>name(varcher)<br>
>>email(varcher)<br>
>>postal1(varcher)<br>
>>postal2(varcher)<br>
>>address(varcher)<br>
>>tel(varcher)<br>

> #### dat_sales_product
>>code(int)<br>
>>code_sales(int)<br>
>>code_product(int)<br>
>>price(int)<br>
>>quantity(int)<br>

> #### mst_product
>> code(int)<br>
>>name(varcher)<br>
>>price(int)<br>
>>gazou(varchar)<br>

> #### mst_staff
>> code(int)<br>
>>name(varchar)<br>
>>password(varchar)<br>
