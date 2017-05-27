[API文档](http://v2.wp-api.org/reference/posts/)
[API中文教程](http://blog.csdn.net/su_tianbiao/article/details/50622682)
**API实例**
获取文章并过滤
`GET /posts?filter[posts_per_page]=8&filter[order]=ASC`
**搜索一篇文章**
`http://local.wordpress.com/wp-json/wp/v2/posts?search=测试文章2`
**获取特定的文章**
`http://local.wordpress.com/wp-json/wp/v2/posts?id=7`

`/wordpress.sql`数据库文件

后台帐号： `admin`
后台密码： `12345abc`

**配置文件**
`wp-config.php`

```php
/** WordPress数据库的名称 */
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', '12345abc');

/** MySQL主机 */
define('DB_HOST', 'localhost');
```