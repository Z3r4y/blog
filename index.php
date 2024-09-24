<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的博客</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>欢迎来到我的博客</h1>
        <nav>
            <ul>
                <li><a href="#">首页</a></li>
                <li><a href="#">关于我</a></li>
                <li><a href="#">文章</a></li>
                <li><a href="#">联系我</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>最新文章</h2>
            <?php
            // 模拟文章数据
            $articles = [
                ['title' => '文章标题 1', 'summary' => '这是文章摘要 1...', 'link' => '#'],
                ['title' => '文章标题 2', 'summary' => '这是文章摘要 2...', 'link' => '#']
                // 可以添加更多文章
            ];

            foreach ($articles as $article) {
                echo "<article>
                        <h3>{$article['title']}</h3>
                        <p>{$article['summary']}</p>
                        <a href=\"{$article['link']}\">阅读全文</a>
                      </article>";
            }
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 我的博客</p>
    </footer>
</body>
</html>
