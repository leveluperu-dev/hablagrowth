-- Create the user if it doesn't exist
CREATE USER IF NOT EXISTS 'hablagrowth_user'@'%' IDENTIFIED BY 'hablagrowth_password';

-- Grant privileges
GRANT ALL PRIVILEGES ON hablagrowth.* TO 'hablagrowth_user'@'%';

-- Flush to apply changes
FLUSH PRIVILEGES;
