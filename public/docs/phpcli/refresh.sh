host="jaysg.cqby2okadb1u.ap-southeast-1.rds.amazonaws.com"
wget --no-cache --no-cookies -O /tmp/combine.csv "https://docs.google.com/spreadsheets/d/1R2QTK1QccFAKVbCUbwgwnqmR2S0Xo7odoMqcjhKXBmo/pub?gid=810227757&single=true&output=csv"
mysql --local-infile -A -ucf_admin -pBapintri123 jay -h $host < /var/www/html/emp/public/docs/phpcli/loadData.sql
