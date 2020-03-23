//工厂
class Factory 
{
    __construct ($type) {
    switch +: return new operateAdd();
    switch -: return new operateSub();
    }

}
//方法类
class operateAdd()
{
    getRes() {
        return numberA + numberB;
    }
}

//客户端
class Client
{
    operate = new Factory(+);
    return operate->getRes(numberA, numberB);
}

