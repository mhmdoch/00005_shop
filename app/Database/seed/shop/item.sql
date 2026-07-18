INSERT INTO `item` (
  `id`,
  `catalog_id`,
  `itemable_type`,
  `itemable_id`,
  `active`,
  `price`,
  `currency`
) VALUES
-- Alte Preisversion des roten Fußballs
(1, 1, 'ball', 1, 0, 19.99, 'EUR'),
-- Aktuelle Preisversion des roten Fußballs
(2, 1, 'ball', 1, 1, 24.99, 'EUR'),
-- Aktuelles Lego-Set
(3, 2, 'lego', 1, 1, 39.99, 'EUR'),
-- Aktueller Schuh
(4, 3, 'shoe', 1, 1, 89.99, 'EUR');
