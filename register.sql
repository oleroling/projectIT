
CREATE TABLE IF NOT EXISTS  users(
    user_id int(11) NOT NULL AUTO_INCREMENT,
    first_name varchar2() NOT NULL,
    last_name varchar2() NOT NULL,
    email varchar2() NOT NULL,
    password varchar2() NOT NULL;
    created varchar2() NOT NULL;
    PRIMARY KEY (user_id)
);