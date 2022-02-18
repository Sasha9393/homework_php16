```sql
SELECT 
    concat(
        "This is ", 
        name, 
        ", ", 
        (CASE WHEN gender='m' THEN "he " ELSE "she " END), 
        "has email ", 
        email
    ) 
AS 
    info 
FROM 
    module2;   

+-----------------------------------------------+
| info                                          |
+-----------------------------------------------+
| This is Vasya, he has email mmm@mmail.com     |
| This is Alex, he has email mmm@gmail.com      |
| This is Alexey, he has email alexey@gmail.com |
| This is Helen, she has email hell@gmail.com   |
| This is Jenny, she has email eachup@gmail.com |
| This is Lora, she has email tpicks@gmail.com  |
+-----------------------------------------------+
```


```sql
SELECT 
    concat(
        "We have ", 
        count(*), 
        (CASE WHEN gender='m' THEN " boys!" ELSE " girls!" END)
    ) 
AS 
    "Gender information:" 
FROM 
    module2 
GROUP BY 
    gender;   

+---------------------+
| Gender information: |
+---------------------+
| We have 3 boys!     |
| We have 3 girls!    |
+---------------------+
```