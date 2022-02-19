const majimeZineArchive = document.querySelector('#majimeZineArchive');
let infinityScrollArchive = new InfiniteScroll(majimeZineArchive, {
	append: '.c-section-grid3__item',             // 各記事の要素
    path: '.next_posts_link a',  // 次のページへのリンク要素を指定
    hideNav: '.next_posts_link', // 指定要素を非表示にする（ここは無くてもOK）
    button: '.c-button-more__archives a', // 記事を読み込むトリガーとなる要素を指定
    scrollThreshold: false,      // スクロールで読み込む：falseで機能停止（デフォルトはtrue）
    status: '.page-load-status', // ステータス部分の要素を指定
    history: 'false'
});

const majimeZineLatest = document.querySelector('#majimeZineLatest');
const infinityScrollLatest = new InfiniteScroll(majimeZineLatest, {
	append: '.c-section-grid__item',             // 各記事の要素
    path: '.next_posts_link-latest a',  // 次のページへのリンク要素を指定
    hideNav: '.next_posts_link-latest', // 指定要素を非表示にする（ここは無くてもOK）
    button: '.c-button-more__latest', // 記事を読み込むトリガーとなる要素を指定
    scrollThreshold: false,      // スクロールで読み込む：falseで機能停止（デフォルトはtrue）
    status: '.page-load-status-latest', // ステータス部分の要素を指定
    history: 'false'
});

// const majimeZineEditor = document.querySelector('#majimeZineEditor');
// const infinityScrollEditor = new InfiniteScroll(majimeZineEditor, {
// 	append: '.c-section-grid3__item',             // 各記事の要素
//     path: '.next_posts_link-editor a',  // 次のページへのリンク要素を指定
//     hideNav: '.next_posts_link-editor', // 指定要素を非表示にする（ここは無くてもOK）
//     button: '.c-button-more-editor', // 記事を読み込むトリガーとなる要素を指定
//     scrollThreshold: false,      // スクロールで読み込む：falseで機能停止（デフォルトはtrue）
//     status: '.page-load-status-editor', // ステータス部分の要素を指定
//     history: 'false'
// });

// const majimeZinenews = document.querySelector('#majimeZineLatest');
// const infinityScrollNews = new InfiniteScroll(majimeZinenews, {
// 	append: '.c-section-grid__news',             // 各記事の要素
//     path: '.next_posts_link-news a',  // 次のページへのリンク要素を指定
//     hideNav: '.next_posts_link-news', // 指定要素を非表示にする（ここは無くてもOK）
//     button: '.c-button-more__news', // 記事を読み込むトリガーとなる要素を指定
//     scrollThreshold: false,      // スクロールで読み込む：falseで機能停止（デフォルトはtrue）
//     status: '.page-load-status-news', // ステータス部分の要素を指定
//     history: 'false'
// });
