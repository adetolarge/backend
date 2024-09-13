-- Create user
INSERT INTO `user_data` (`id`, `email`, `username`, `password`, `role`) VALUES ('?', '?', '?', '?', '?');


-- READ USER
SELECT * from `user_data` WHERE 1 
-- THE CODE ABOVE WILL BRING ALL THE DATA OF THE USER
-- TO SELECT SPECIFIC COLUMN
SELECT `email`, `username`, `role` from `user_data` WHERE 1
-- TRY AS MUCH AS POSSIBLE NOT TO USE * unless when needed


-- UPDATE USER 
UPDATE `user_data` SET `id`= 1 WHERE 1
-- RESULT
UPDATE
    `user_data`
SET
    `id` = '[1233]',
    `email` = '[tolarge@gmail.com]',
    `username` = '[Tolarge]',
    `password` = '[123456]',
    `role` = '[1]'
WHERE
    1


-- Delete
DELETE FROM `user_data` WHERE email = `adetolarger@gmail.com`;