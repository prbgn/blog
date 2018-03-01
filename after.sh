#!/bin/sh

# If you would like to do some extra provisioning you may
# add any commands you wish to this file and they will
# be run after the Homestead machine is provisioned.

if ! which mc > /dev/null; then
    echo "---------- Install MC ----------"
    sudo apt -y install mc
fi

if [ ! -d "/tmp/redisearch" ]; then
    echo "---------- Install RediSearch ----------"
    git clone https://github.com/RedisLabsModules/RediSearch.git /tmp/redisearch
    cd /tmp/redisearch/src
    make all
    sudo  cp -r /tmp/redisearch/src/redisearch.so /etc/redis/
    sudo chown redis:redis /etc/redis/redisearch.so
    sudo  cp -r /home/vagrant/code/resources/provision/etc/redis/* /etc/redis/
    sudo service redis-server restart
fi

echo "---------- Installing assets ----------"
cd /home/vagrant/code
yarn install

echo "---------- Compiling assets ----------"
yarn run dev

echo "---------- Executing migrations ----------"
php artisan migrate

echo "---------- Running Database Seeders ----------"
php artisan db:seed --class=UsersTableSeeder
php artisan db:seed