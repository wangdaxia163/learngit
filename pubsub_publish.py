# -*- coding:utf-8 -*-
import redis

client = redis.StrictRedis()
client.publish("codehole","python comes")
client.publish("codehole","java comes")
client.publish("codehole","golang comes")
~                                          
