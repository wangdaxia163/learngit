
# -*- coding:utf-8 -*-
import time
import redis

client = redis.StrictRedis()
p = client.pubsub()
p.subscribe("codehole")
#非阻塞模式
#while True:
#    msg = p.get_message()
#    if not msg:
#        time.sleep(1)
#        continue
#    print msg

#改为阻塞消费者
for msg in p.listen():
    print msg
~                    
