FROM mysql:latest

# Run migrations
COPY ./db/migrations /docker-entrypoint-initdb.d/

EXPOSE 3306
