create table if not exists users (
    id serial primary key,
    name text not null,
    username varchar(32) not null unique,
    email varchar(64) not null unique,
    mobile varchar(32) not null unique,
    password text not null,
    created_at timestamp not null default now(),
    updated_at timestamp not null default now()
);

create trigger update_users_updated_at
    before update on users
    for each row
    set new.updated_at = now();