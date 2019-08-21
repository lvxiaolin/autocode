# 欢迎使用 基于TP5的代码生成器 **autocode**
我认为，你是一个代码艺术家，你追求代码的抽象和便捷的代码导航。
在此之前，在一些WEB开发中，你需要是不是翻阅数据库建表语句来寻找和确定字段，否则就有可能写错字段。比如：
```
if($User->password == md5($this->getParam('password'))){
    //登录成功
}
```
你可能一不小心，`$User->password` 写错成了 `$User->pass`
```php
//$User->password 写成了 $User->pass 导致BUG
if($User->pass == md5($this->getParam('password'))){
    //登录成功
}
```
你为此感到苦恼，你认为你的IDE不够智能。 
**autocode 代码生成器** 解决了这个问题，让你码代码时，不再需要去翻阅数据库确认字段。像这样：
![screenshot](https://www.ipmtalk.com/public/uploads/20190821/5f2047e2abbc8250eaadcc806a2c579f.png)


## 如何安装呢？

> 1. 安装 *autocode*：
>`composer require lvxiaolin/autocode `

> 2. 生成或更新 *get*、*set* 代码：
>`php think autocode:update`

到这里就已经完成了，如果你对以前写的 `$User->password` 想统一改成 `$User->getPassword()`
> 3. 替换在此之前的属性写法为方法写法*(application代表应用目录)*
`php think autocode:replace -d application` 

## 遇到问题？
感谢你的使用和反馈。
Thank you for your use and look forward to your feedback. 
*Author：LvXiaolin <1974764328@qq.com>* 
