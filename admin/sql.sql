


-- 需要功能

会员注册与登录

查看，搜索商品，订购商品，生成订单

历史订单查询


用户管理

商品管理

订单管理


-- 数据表


用户主表（）
users(id,username,passwd,sex,email,phone,integral,grade,created_time)

-- 积分等级说明：<100(普通会员)，100-1000(白银会员)，1000-10000(黄金会员),>10000(铂金会员)
用户辅表（）
userinfos(id,)

商品表（）
goods(id,gname)

订单表（）
orders(id,gid,uid,username,order_time,address,phone,remark)

管理员表
admins(id,username,passwd,created_time)