DB_USER = root
DB_PASSWORD = root
DB_NAME = gdbdd

#Starting webServer
start: 
	php -S localhost:8000 -t public/

db.create:
	mysql -u ${DB_USER} -p${DB_PASSWORD} -e 'CREATE DATABASE IF NOT EXISTS ${DB_NAME}'
	mysql -u ${DB_USER} -p${DB_PASSWORD} ${DB_NAME} < ./data/db.sql

db.destroy:
	mysql -u ${DB_USER} -p${DB_PASSWORD} -e 'DROP DATABASE IF EXISTS ${DB_NAME}'

db.reset: db.destroy db.create

# Show this help.
help:
	@awk '/^#/{c=substr($$0,3);next}c&&/^[[:alpha:]][[:alnum:]_-]+:/{print substr($$1,1,index($$1,":")),c}1{c=0}' $(MAKEFILE_LIST) | column -s: -t

