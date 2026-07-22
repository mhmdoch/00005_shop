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
(4, 3, 'shoe', 1, 1, 89.99, 'EUR'),
-- Zwei neue Bälle
(5, 4, 'ball', 4, 1, 21.99, 'EUR'),
(6, 5, 'ball', 5, 1, 26.99, 'EUR'),
-- Drei neue LEGO-Sets
(7, 6, 'lego', 3, 1, 69.99, 'EUR'),
(8, 7, 'lego', 4, 1, 49.99, 'EUR'),
(9, 8, 'lego', 5, 1, 12.99, 'EUR'),
-- Neun neue Schuhe
(10, 9, 'shoe', 3, 1, 74.99, 'EUR'),
(11, 10, 'shoe', 4, 1, 139.99, 'EUR'),
(12, 11, 'shoe', 5, 1, 129.99, 'EUR'),
(13, 12, 'shoe', 6, 1, 99.99, 'EUR'),
(14, 13, 'shoe', 7, 1, 84.99, 'EUR'),
(15, 14, 'shoe', 8, 1, 79.99, 'EUR'),
(16, 15, 'shoe', 9, 1, 64.99, 'EUR'),
(17, 16, 'shoe', 10, 1, 119.99, 'EUR'),
(18, 17, 'shoe', 11, 1, 149.99, 'EUR'),
-- Zwei Tennisschläger
(19, 18, 'tennisracket', 1, 1, 229.99, 'EUR'),
(20, 19, 'tennisracket', 2, 1, 189.99, 'EUR');
