INSERT INTO `category` (`parent_id`, `name`) VALUES
(NULL, 'Sport'),
(NULL, 'Spielzeug'),
(NULL, 'Bekleidung');

INSERT INTO `category` (`parent_id`, `name`)
SELECT `id`, 'Schuhe'
FROM `category`
WHERE `name` = 'Bekleidung' AND `parent_id` IS NULL
UNION ALL
SELECT `id`, 'LEGO'
FROM `category`
WHERE `name` = 'Spielzeug' AND `parent_id` IS NULL
UNION ALL
SELECT `id`, 'Bälle'
FROM `category`
WHERE `name` = 'Sport' AND `parent_id` IS NULL;
