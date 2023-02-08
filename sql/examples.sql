
SELECT * FROM `students` WHERE 1 ---найти все данные

SELECT `id`, `name`, `surname`, `username` FROM `students` WHERE 1 ---найти данные которые были указаны

INSERT INTO `students`(`id`, `name`, `surname`, `username`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]') ---Добавление строк в таблицу

UPDATE `students` SET `id`='[value-1]',`name`='[value-2]',`surname`='[value-3]',`username`='[value-4]' WHERE 1 ---обновление строки в тоблице

DELETE FROM `students` WHERE 0 ---Удоление строки в тоблице.