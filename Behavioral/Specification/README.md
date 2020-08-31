### 规格模式（Specification）

构建一个清晰的业务规则规范，其中每条规则都能被针对性地检查。每个规范类中都有一个称为 isSatisfiedBy 的方法，方法判断给定的规则是否满足规范从而返回 true 或 false。