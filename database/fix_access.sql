-- Ensure database exists
CREATE DATABASE IF NOT EXISTS hablagrowth;

-- Reset the user completely to ensure password matches
DROP USER IF EXISTS 'hablagrowth_user'@'%';
CREATE USER 'hablagrowth_user'@'%' IDENTIFIED BY 'hablagrowth_password';

-- Grant privileges
GRANT ALL PRIVILEGES ON hablagrowth.* TO 'hablagrowth_user'@'%';

-- Flush to apply changes
FLUSH PRIVILEGES;
