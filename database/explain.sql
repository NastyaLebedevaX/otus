EXPLAIN ANALYSE SELECT * FROM book_info WHERE "page_count" >= 500;

QUERY PLAN

"Seq Scan on book_info  (cost=0.00..1.06 rows=2 width=438) (actual time=0.013..0.015 rows=3 loops=1)"
"Filter: (page_count >= 500)"
"Rows Removed by Filter: 2"
"Planning Time: 0.073 ms"
"Execution Time: 0.029 ms"

// После создания индекса на количество страниц

"Seq Scan on book_info  (cost=0.00..1.06 rows=2 width=438) (actual time=0.015..0.017 rows=3 loops=1)"
"Filter: (page_count >= 500)"
"Rows Removed by Filter: 2"
"Planning Time: 1.547 ms"
"Execution Time: 0.034 ms"