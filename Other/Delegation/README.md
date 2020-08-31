### 委托模式（Delegation）

在委托模式的示例里，一个对象将它要执行的任务委派给与之关联的帮助对象去执行。在示例中，「组长」声明了 writeCode 方法并使用它，其实「组长」把 writeCode 委托给「菜鸟开发者」的 writeBadCode 方法做了。这种反转责任的做法隐藏了其内部执行 writeBadCode 的细节。