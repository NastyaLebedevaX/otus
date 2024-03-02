EXPLAIN ANALYSE SELECT * FROM books WHERE "page_number" >= 500;

QUERY PLAN

Seq Scan on books  (cost=0.00..183.40 rows=1 width=49) (actual time=1.113..1.113 rows=0 loops=1)
Filter: (page_number >= 500)
Rows Removed by Filter: 8192
Planning Time: 1.461 ms
Execution Time: 1.137 ms

// После создания индекса на количество страниц

Seq Scan on books  (cost=0.00..183.40 rows=1 width=49) (actual time=0.929..0.929 rows=0 loops=1)
Filter: (page_number >= 500)
Rows Removed by Filter: 8192
Planning Time: 0.088 ms
Execution Time: 0.944 ms