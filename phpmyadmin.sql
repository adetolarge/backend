-- Create user
INSERT INTO `user_data` (`id`, `email`, `username`, `password`, `role`) VALUES ('1231', 'adetolarge@gamil.com', 'tolarge', '585658', '1');


-- READ USER
SELECT `1232`, `adetolarger@gmail.com`, `adetolarger`, `123456`, `1` FROM `user_data` WHERE 1
-- RESULT BROUGHT
SELECT
    `1232`,
    `adetolarger@gmail.com`,
    `adetolarger`,
    `123456`,
    `1`
FROM
    `user_data`
WHERE
    1

-- UPDATE USERr
UPDATE `user_data` SET `id`='[1233]',`email`='[tolarge@gmail.com]',`username`='[Tolarge]',`password`='[123456]',`role`='[1]' WHERE 1
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