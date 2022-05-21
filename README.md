# tinkoff-invest-grpc
Неофициальный интерфейс взаимодействия с Tinkoff Invest API v2 для symfony
 
Комманда для генерации моделей с помощью ```protoc```
```
protoc --proto_path=src/Proto --php_out=src/models/ --grpc_out=src/models/ --plugin=protoc-gen-grpc=../../grpc/cmake/build/grpc_php_plugin src/Proto/*
```
