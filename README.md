基本からしっかり学ぶSymfony2入門　サポートサイト
================================================

**第3章 p.56のプロジェクト準備のコマンド例に誤植がありました。 [正誤情報](#正誤情報) をご参照ください。**

本書の内容についてのご質問や誤植のご報告は、[issue](https://github.com/hidenorigoto/symfony2-book/issues)にてお願いします。

**Gihyo Digital Publishingからは、誤植訂正済最新版を入手可能です** [書籍情報ページ](https://gihyo.jp/dp/ebook/2015/978-4-7741-7880-6)

# 目次

- [サンプルコードのダウンロード](#サンプルコードのダウンロード)
- [正誤情報](#正誤情報)
- [リストごとのコミット](#リストごとのコミット)
- [参照リンク](#参照リンク)
- [ライセンス](#ライセンス)

# サンプルコードのダウンロード

- サンプルコード ([ダウンロード](../../raw/master/download/symfony2-book-download-20151125.zip) 18.4MB)
    - サンプルコードの中に、書籍内のすべてのリストと、途中で利用するCSSやテンプレートなどのアセットファイルが含まれています
    - リストは[こちら](../../tree/master/docs/lists)からも閲覧できます
- サンプルアプリケーション完成コード ([ダウンロード](https://github.com/hidenorigoto/symfony2-book/archive/master.zip))
    - GitリポジトリURL https://github.com/hidenorigoto/symfony2-book.git (本ページのあるリポジトリと同じです)

このGitリポジトリは、本書で開発するアプリケーションのソースコードのリポジトリにもなっており、解説するリストごとにコミットを登録してあります([リストごとのコミット](#リストごとのコミット)参照)。リストに示されたコードの記述場所がわからない場合は、コミットの差分で確認することができます。また、何らかの理由で手元のアプリケーションのコードがおかしくなってしまった場合に、該当個所のコミットをチェックアウトすることで、すぐに復元することもできます。是非お役立てください。

# 正誤情報

紙版および電子書籍初版。GDP版で修正済のものは対応更新日を記載しています。

## 第2章

- p.46 demoアプリケーションのルートでは、パスの先頭に `/ja/` が入ります。また、ポート番号（8000）も追加してください。（GDP20160113）

2段落目1〜2行目

 (誤) | アクションメソッドのルートはクラスで定義されたルートと結合されるので、最終的には、`/blog/` というURLでリクエストされた場合
 -----|-----------------------------------
 (正) | アクションメソッドのルートはクラスで定義されたルート、およびルート定義のプレフィックス（リスト2-3 5行目）と結合されるので、最終的には、`/ja/blog/` というURLでリクエストされた場合

2段落目4行目

 (誤) | ブラウザから`http://127.0.0.1/blog/`にアクセスし、
 -----|-----------------------------------
 (正) | ブラウザから`http://127.0.0.1:8000/ja/blog/`にアクセスし、

- p.50 getTemplatingService()内で使われているクラスは `TimedTwigEngine` ではなく `TwigEngine` になります。TimedTwigEngineはSymfony 2.6以前で利用可能で、古いバージョンのサービスコンテナではこのクラスが使われていました。Symfony 2.7で非推奨となり、Symfony 3.0で削除されます [参照](https://github.com/symfony/twig-bundle/blob/2.7/Debug/TimedTwigEngine.php#L26)。（GDP20160113）

1段落目5〜6行目

 (誤) | このメソッドを見ると、`TimedTwigEngine`というクラスが
 -----|-----------------------------------
 (正) | このメソッドを見ると、`TwigEngine`というクラスが

1段落目6〜7行目

 (誤) | TimedTwigEngineクラスのコンストラクタに渡している引数は3つあり
 -----|-----------------------------------
 (正) | TwigEngineクラスのコンストラクタに渡している引数は3つあり


## 第3章

- p.56 プロジェクトのひな型生成時のコマンドで、`classic-symfony` の後にスペースを入れてください。（GDP20160113）

 (誤) | $ symfony new classic-symfony2.7
 -----|-----------------------------------
 (正) | $ symfony new classic-symfony 2.7

 (誤) | C:¥projects>php symfony.phar new classic-symfony2.7
 -----|-----------------------------------
 (正) | C:¥projects>php symfony.phar new classic-symfony 2.7


## 第4章

- p.119 図4-14「プロファイラのメールパネルでメール本文を確認」内のお問い合わせ種別の表記が間違っていました。([差替画像](https://cloud.githubusercontent.com/assets/89830/12013282/b06a4348-ad56-11e5-9a02-9c0a3c0e292a.png))（GDP20160113）

 (誤) | ●お問い合わせ種別： 0
 -----|-----------------------------------
 (正) | ●お問い合わせ種別： 公演について


## 第6章

- p.155 リスト6-5のindexAction()内、findAll()はfindBy()の誤りです。（GDP20160113）

 (誤) | $inquiryList = $inquiryRepository->findAll([], ['id' => 'DESC']);
 -----|----------------------------
 (正) | $inquiryList = $inquiryRepository->findBy([], ['id' => 'DESC']);

- p.156 図6-4でお問い合わせ一覧がIDの降順で表示されていないのは誤りです。([差替画像](https://cloud.githubusercontent.com/assets/89830/12013917/5c7be3d2-ad64-11e5-81b7-6c09c6a9a637.png))（GDP20160113）

- p.157脚注 `doctrine:generate:entities` コマンドで作成されるバックアップファイルでは、ファイル名の先頭ではなく末尾に `~` がつきます。（GDP20160113）

 (誤) | 先頭に ~ が付いたファイル名
 -----|----------------------------
 (正) | 末尾に ~ が付いたファイル名

- p.168 3段落3-4行目（GDP20160113）

 (誤) | これまで使っていたfindAll()メソッド
 -----|----------------------------
 (正) | これまで使っていたfindBy()メソッド

- p.169 1段落3-4行目（GDP20160113）

 (誤) | エンティティの一覧取得に利用していたfindAll()メソッド
 -----|----------------------------
 (正) | エンティティの一覧取得に利用していたfindBy()メソッド


## 第9章

- p.264 本書の解説ではhautelook/alice-bundleは、バージョン0.2を利用します。Composerでインストールする際、明示的にバージョン番号を付加してください。（GDP20160113）

3段落目の下コマンド例内

 (誤) | $ php composer.phar require hautelook/alice-bundle --dev
 -----|----------------------------
 (正) | $ php composer.phar require hautelook/alice-bundle:0.2 --dev


## Appendix 1

- p.285 moneyタイプの説明に誤植がありました。

 (誤) | 通過用のフォーマット機能あり
 -----|----------------------------
 (正) | 通貨用のフォーマット機能あり


# リストごとのコミット

- [【3-0】 Symfony Installerにてインストール](../../commit/973d40a200443ed5af6def04fa5b98b1ae8203a3)
- [parameters.ymlをignoreしないように](../../commit/1b86d1d4aa87611dbe24fdc5b44d9f8e09b5f3e1)
- [【3-1】 parameters.ymlの編集](../../commit/7e03fd026a632a43163eb3b4788181f472d9993f)
- [【3-2】 config.ymlの編集](../../commit/ea3ea7227f72d2b6304315fc86dc7455e8707089)
- [【3-2-after】 不要なファイルの削除](../../commit/7e0ca7f83a9652ce5642225c68bb12b58618d9cc)
- [【3-3】 コントローラの作成](../../commit/d6ea15a2b5dde5edacc00ecb56f9a065e59a3a65)
- [【3-4】 ToppageControllerにindexAction()メソッドを追加](../../commit/3048fba72949c5f8cde2c6d0eceb954be7fe87cd)
- [【3-5】 indexAction()メソッドに@Routeアノテーションでルートを指定](../../commit/0897ad33077ef058796d9742b41e9b8622853137)
- [【3-6】 トップページの最初のテンプレート](../../commit/6c19a607fe71d1b9b1216635ac81d91b050d491d)
- [【3-7】 テンプレートをレンダリングするように修正](../../commit/034b5b7cb965eca0a2522fc1e4206673800f5e46)
- [【3-8-before】 Concertコントローラの作成](../../commit/357db07621d87fef1f187351cf880901a331949a)
- [【3-8】 公演情報ページのコントローラ](../../commit/789a11d5f999e48bd3fe17ebaab963400b03f0fd)
- [【3-9】 公演情報ページのテンプレート](../../commit/10c6f50dce0ca51328627b6f1b0ed2c2df7ec794)
- [【3-10】 アクションに新着情報データを追加](../../commit/31c2359a6385ad04d1162d4bc504ba0919c83476)
- [【3-11】 トップページのテンプレートを修正](../../commit/0e8727599b7fa3b41653c7007830ae2cae5eee7e)
- [【3-12】 公演情報ページのアクションに公演情報配列を定義](../../commit/7127a7f5ecd58e097a3a88f89528d1258e7122c9)
- [【3-13】 公演情報ページのテンプレートで配列変数を参照](../../commit/6cbc2e7d4a7043a61169a3b348d5708f6a6af929)
- [【3-14】 公演情報ページのテンプレートでforを使う](../../commit/de4cf6e0aad8244c1cc5e73e550a4d492493a9bb)
- [【3-15】 公演情報配列を修正](../../commit/9cce3fb5a3b573f6d0a92fa85a62a6119a4689ae)
- [【3-16】 公演情報ページのテンプレートを修正](../../commit/56c2e280b0883fca0d641d6c2728793dd3b6806a)
- [【3-17】 トップページのテンプレート](../../commit/6559d2c98fd3ba2267690301e5e6502ea7ff87b7)
- [【4-1】 お知らせ用のテンプレート部品](../../commit/9b815d9185d48f6d777b162dd780978737b11222)
- [【4-2】 トップページのテンプレートを修正](../../commit/388ec2a9f146da4471af186979350a1cd5de0840)
- [【4-3-before】 Blogコントローラを作成](../../commit/e49a0c9386291371cee2e8c0ff98df86e6354e86)
- [【4-3】 新着ブログ記事用コントローラとアクション](../../commit/f36b495665d3e86b1ab07c91fda4da3718186bd6)
- [【4-4】 新着ブログ記事テンプレート](../../commit/cefe351a5ff80b51c9d2788431092ccd31819161)
- [【4-5】 トップページのテンプレートを修正](../../commit/22b12fbb66e898e1b68fd980eef395dd1a6d2546)
- [【4-5-after-webassets】 CSS/JSファイル群を追加](../../commit/135535de58ca54358a810f7831898ce1b03fce64)
- [【4-6, 4-7】 レイアウトテンプレート、公演情報テンプレート](../../commit/224c6fdbf1c7e986e14b71105c2a3794cfd23fe2)
- [【4-8】 お問い合わせページ表示のアクション](../../commit/52116251787f5ff10df38c9fdf194cf70b57cd92)
- [【4-9】 フォームの簡易表示を使ったお問い合わせページのテンプレート](../../commit/7e1ad8c585efb47e8fd7b2685ad4d6b1dfe4b22d)
- [【4-10】 フォームの簡易表示部分のソース](../../commit/f3ec4c309bac7d653291daf8262992656b8223f9)
- [【4-11】 フォーム要素を個別に表示](../../commit/76ca85254de4a97890abc019fe5a6fcc9fb9678b)
- [【4-12】 お問い合わせフォーム定義メソッド](../../commit/397650cbde2f28bcc786d43d7d150f58505a0ae7)
- [【4-13】 indexAction()を修正](../../commit/194297e70929b7973ffb65cc3248cba7c0170d43)
- [【4-14】 completeAction()](../../commit/bb3a90de2668a271d74757197cc4e7a5f0d144d3)
- [【4-15】 お問い合わせ完了画面のテンプレート](../../commit/d415c6895f1cf17aa59a23b960b0b00633385ea6)
- [【4-16】 indexPostAction()にフォームの処理フローを記述](../../commit/252eb65e149b9f00c5eb78d04bf702d643bf3f57)
- [【4-17】 リダイレクトインターセプションを有効化](../../commit/0025ed3ce9b6b0dd371c3270177e039a9d3b9a1c)
- [【4-18】 Swift Mailerの設定](../../commit/836406298206bf1b100914ef91d935914e6d9874)
- [【4-19】 メール送信にGmailを使う設定](../../commit/2bd261993ca5b239a010607fe44ee1cf701e6df9)
- [【4-20】 メール送信先を上書きする設定](../../commit/3c38ceb812aacbf5c2d9b89b9b1cc19c2b66a0f7)
- [【4-21】 お問い合わせ時のメールのテンプレート](../../commit/22c2a2322825aba36267bab303edef22bc541c09)
- [【4-22】 indexPostActionでメール送信処理を実装](../../commit/3a92c878ca425e6920be29ffe7f6fc26c4309b9b)
- [【5-1】 Inquiryエンティティクラスの生成、生成されたInquiryクラス](../../commit/b9813260f7cb350d685b315aa028cc1bdb4d0de4)
- [【5-1-after】 マッピング定義を修正](../../commit/00ea09ea62ab8f06bd1aeb5dc9b326566e4b2d2a)
- [【5-2】 indexPostAction()に保存処理を記述](../../commit/dccb22a011f4375a01d702ca8ecb606e66d5861b)
- [【5-3】 createInquiryForm()を修正](../../commit/817ac83fdaa04c05c740c3f561365be5220cfe62)
- [【5-4】 indexPostAction()の修正](../../commit/b9718f325a137d8de23c3cdd351de1668758c81e)
- [【5-4-after1】 doctrine:generate:entityコマンド実行後](../../commit/a9d8ca859cf207ff575385f565e094dd20e22a7f)
- [【5-5】 BlogArticleエンティティのマッピング定義を修正](../../commit/3db790450dbda7f81a4cc071d35dc84f6d9f5780)
- [【5-6】 ブログ記事サンプルデータ追加用SQL](../../commit/dbb324aed16b5f667ff918e2b1b3e369dc85cd67)
- [【5-7】 ブログ記事一覧をデータベースから読み込む](../../commit/7c08d928ae7fee8314064ad060ab10a20743427e)
- [【5-8】 新着ブログ記事用のテンプレート修正](../../commit/d87b3ce6b03ef493114243dcf81b27b4454fc3c5)
- [【6-1】 クライアントサイドバリデーションの無効化](../../commit/4da20f7bd5c01c52ea98330ef8c53335fdad3f91)
- [【6-2】 翻訳を有効にするようにコンフィギュレーションを変更](../../commit/d1871430fe1cfa6d9e1570c99825a350d6a79aa2)
- [【6-3】 Inquiryエンティティクラスにバリデーション定義を追加](../../commit/91051f86a812570c3fea00e9feba3c5e0ebfcd8d)
- [【6-4-before】 管理者用画面の基本部分の作成](../../commit/54ebe1c2925a2b7106918258049bd38570a5c9a4)
- [【6-4】 セキュリティコンフィギュレーション](../../commit/b01a0fca60560ae295b1d385ac5323815e9a1a1f)
- [【6-5】 お問い合わせ一覧のコントローラ](../../commit/f04b208df489f56763eb1f999b170a8d53b433a7)
- [【6-6】 お問い合わせ一覧のテンプレート](../../commit/920b60cd4d7bc3dce2c671896f5d6fa98b65323e)
- [【6-7】 管理者用画面メニューのテンプレート修正](../../commit/c9d4d94aff98549575e80af8f3765e525072cbc8)
- [【6-8】 Inquiryエンティティにプロパティとコンストラクタを追加](../../commit/f540ed501273d11ee41b711c703ed5d8743b7532)
- [【6-8-after】 getter/setterの自動生成](../../commit/9acc669c7711291858068226494e9b7cc162f38a)
- [【6-9】 Inquiryエンティティでバリデーショングループの追加](../../commit/5722a30d61dcd74ee09b2f65d25f1e3e604128e2)
- [【6-10】 お問い合わせ編集のコントローラ](../../commit/6f114a419330be0ef637074b5f51b7c897445695)
- [【6-11】 createInquiryForm()メソッド](../../commit/11d3314879b8f799387c3e8feac298263fc921ac)
- [【6-12】 inputAction()メソッド](../../commit/a6b4f1e0ccef1ae2c1db743bf0be312c4729237a)
- [【6-13】 inputPostAction()メソッド](../../commit/96b1c4b706eb2b23c3eeef94ade5a7932e469f68)
- [【6-14】 お問い合わせ編集のテンプレート](../../commit/36d9a7d32892ec48aa186111a314b03e2c37a599)
- [【6-15】 お問い合わせ一覧のテンプレート修正](../../commit/7647738a356588c7c85377e0780ecafa7d3cd73a)
- [【6-16】 お問い合わせ一覧のコントローラ](../../commit/ad2ed73622701ada84984100f194ef1acac117db)
- [【6-17】 findAllByKeyword()メソッドを実装](../../commit/14b44466e8e9c0bccb38cd082287d147d410219e)
- [【6-18】 お問い合わせ検索フォームをテンプレートに追加](../../commit/1f178720c261708c46aef637679b5132d91024be)
- [【7-pre】 ComposerでDoctrineFixtureBundleをインストール](../../commit/aa0a95ac21ee2040ccc14e5abea86b9558b462dc)
- [【7-1】 AppKernelにてバンドルを有効化](../../commit/3f99af5b45b8c09928b4fb3ff1708f768561bf69)
- [【7-2】 お問い合わせフィクスチャ](../../commit/8605c424f03dc713f2d7a35d4f0770c8e6936675)
- [【7-3-pre】 Composerでleague/csvをインストール](../../commit/fe6d33702d512fe1f4400827ccebe8e10334632a)
- [【7-3】 AdminInquiryListControllerを修正](../../commit/61e74b2f3831a96403b837d556ab8b906705cb12)
- [【7-4】 お問い合わせ一覧のテンプレート修正](../../commit/c78a42c25dfed37b7e53c2c3238ac2c8c5c9fd82)
- [【7-5】 debug:routerコマンドのソース](../../commit/3a001abb1977e4cfbae13fbd0eb385768221481a)
- [【7-6】 未処理お問い合わせ一覧通知コマンド](../../commit/a79af42aa9cc4ab712882394d07ba407664872d9)
- [【7-7】 InquiryRepositoryに未処理お問い合わせ一覧取得メソッドを追加](../../commit/afebc6295e8886ebc1c43eaf76433ae3ea483eb2)
- [【7-8】 未処理通知用のテンプレート](../../commit/9bdf41d0ca5bf05f959dc0c53fc1eb279a740b8a)
- [【7-9】 parameters.yml.distに追加](../../commit/870670bec84d6107bee56076a15e29b1a3f03f33)
- [【7-10】 parameters.ymlに追加](../../commit/b5db6f290dfde7541967002ad85f44bc7b8d751c)
- [【7-11】 config.ymlに追加](../../commit/f275685de3ec32e2168335d60c712f29100c64df)
- [【7-12】 未処理お問い合わせ通知コマンドのインタラクティブ化](../../commit/296955bc6a1e4b6eaca84e854f8844b9055908ee)
- [【7-13-pre-composer】 Composerでfriendsofsymfony/rest-bundle、jms/serializer-bundleをインストール](../../commit/8496a29bd11af82cd0e5d92baba0479c4343e70b)
- [【7-13】 AppKernelにてバンドルを有効化](../../commit/d3e6e66398fd58e5c5c39025b2b149f1c8a82b85)
- [【7-14-pre】 Concertエンティティをコマンドで作成](../../commit/4628c2e394802f1befbdeb8c4329615bd4888801)
- [【7-14-pre2】 Concertエンティティのマッピング定義を修正](../../commit/ff6c38325544005b3cd89f369f0652f2ddd61ae1)
- [【7-14-pre3】 LoadConcertDataを追加](../../commit/0ba6beb74893afe7dd776fab493f82f34f5a202e)
- [【7-14】 ConcertエンティティクラスにAPI公開の設定を記述](../../commit/b665387d064d4b5f0fe5a9d2ba3d59514d08fcf1)
- [【7-15】 公演情報のシリアライズ確認用テストコマンド](../../commit/2611a244fe9662304780c616364ee0f9b565ccfd)
- [【7-16】 公演情報APIエンドポイント用のコントローラのひな型](../../commit/e1d48af049ee3bf0710a63b99df2b21de678c684)
- [【7-17】 APIエンドポイント用ConcertControllerにgetConcertsAction()メソッドを追加してルートを定義](../../commit/c79751f91ca70cd70f42b0453f1e49df72d1a0ad)
- [【7-18】 ConcertControllerのgetConcertsAction()メソッドを実装](../../commit/ae88e36921210df526121dcebe79beae7513940a)
- [【7-19】 FOSRestBundleの動作の設定](../../commit/f6bef598ae1ad593a0f4d0f06f2287dbe7eba60b)
- [【7-20】 getConcertsAction()を修正](../../commit/ffb93a1ce7d32d29ae7d448c7cccd219ad1ddc8a)
- [【7-21】 getConcertsAction()メソッドの@Rest\Getアノテーションを削除](../../commit/3301513df8abe9a7eb32dcf6a382a8b3dc9ecf89)
- [【7-22】 FOSRestBundleの機能を利用したルーティング設定](../../commit/e1803161c7fc5870350f8a82eb8d83ace8999486)
- [【7-23-pre】 Composerでnelmio/api-doc-bundleを追加](../../commit/c15104f2f431cca58155ec339a33b77374911079)
- [【7-23-pre2】 NelmioApiDocBundleを有効化](../../commit/3bb6e2e822d18c2d3ca8381ce028b6fd75c5f030)
- [【7-23】 開発用ルート設定にAPIドキュメントのルートを追加](../../commit/4ae33ef722e8dd4e0485fd96e0e8c5591520cf72)
- [【7-24】 APIドキュメントのデフォルト設定を追加](../../commit/de7cfca15ab1c9100509442e5a4bea9fa13a962f)
- [【7-25】 公演情報APIエンドポイントのAPIドキュメント設定](../../commit/8462c5af544dd918e2deadb906431d57cd613ab1)
- [【7-26-pre】 Composerでnelmio/cors-bundleをインストール](../../commit/5f2ef8a280ed6e0e106aef00c1df3223489d6cea)
- [【7-26-pre2】 NelmioCorsBundleを有効化](../../commit/ca2d318919ca82c1a28da9fe2dc392728b5e41f2)
- [【7-26】 NelmioCorsBundleの設定](../../commit/7def08a14bdf8b060e4bed0bedd63a94e971dc1f)
- [【7-27】 CORS動作確認画面のHTML](../../commit/198779f0b89fe35fadd1ff4c7ed087551f3270ba)
- [【7-28】 NelmioCorsBundleの設定を変更](../../commit/de36b68f55fc6d4d3474f1511c1919f44fbc8725)
- [【8-1】 InquiryCsvBuilderクラスを作成](../../commit/663e927dc12b59a11e304e0a614f3712c3b50bf1)
- [【8-2】 AppExtensionクラス](../../commit/cad0a88351ec76d2974294eaf052bffa553a5688)
- [【8-3】 services.ymlのサービス定義の例](../../commit/17f3709b1cb21c1d29bb4190506984aa26abc508)
- [【8-4】 サービスを確認するテストコマンド](../../commit/e8049156dd4986a46f4684850537f7f9c4bb2bfa)
- [【8-5-before】 Composerでjms/di-extra-bundleを追加](../../commit/17faafe816a5004f8ffa73832041a038de0511fc)
- [【8-5】 バンドルを有効化](../../commit/ca11a29cec03855b99b88b428daba49350bfdfde)
- [【8-6】 JMSDiExtraBundleの動作の設定](../../commit/37467312ad796104fc086820664588d319f85658)
- [【8-7】 InquiryCsvBuilderにサービス定義アノテーションを追加](../../commit/fb2e5a85f454f0e6d2843e81619a08ae9c7703ae)
- [【8-8】 services.ymlでサービス定義を削除](../../commit/c8c562c5f6e179a2b8947ec6facfafb53971e069)
- [【8-9】 Memberエンティティクラス](../../commit/41f9f7d4902c422c32dddb16e64d81d87ae4814a)
- [【8-10】 MemberCollectionクラス](../../commit/291b615a30fc1d856fc810e6de6009641d7ea07f)
- [【8-11】 団員一覧の定義](../../commit/257a81d41b8d7c9a7ec93c6c278322e765a0b94b)
- [【8-12】 AppBundleのConfigurationクラス](../../commit/5a5e3ecf0e1acfcf166c9f663aadb7986d45007d)
- [【8-13】 AppBundleのAppExtensionクラス](../../commit/22d45803b5175b92c9bc7596a6b9d704a37e5fee)
- [【8-14】 サービスコンテナのMemberCollectionサービス生成コード](../../commit/cd8f9dfd935e2e9824d1864b045a3788e98fda20)
- [【8-15】 団員一覧ページのコントローラ](../../commit/5b7bbb87d1a00a5769177ffc3af5a471a180b11e)
- [【8-16】 団員一覧ページのテンプレート](../../commit/7f228e1e47152c66b620dad7a750de2f9dbab325)
- [【9-pre】 ComposerでPHPUnitをインストール](../../commit/bf5e6576bb544f84520877481d4cb3afb04cb71e)
- [【9-1】 PHPUnitの設定を修正](../../commit/2e8900678f1b3dc4e34ca1175f62387ca9305f99)
- [【9-1-after】 不要なファンクショナルテストの削除](../../commit/950d474e79c8aa5676f97cda3fb35a9a1e1905b9)
- [【9-2】 MemberCollectionのテストクラス](../../commit/40747acd4bfd8ef28535492664bd454edf6c0b5c)
- [【9-3】 MemberCollectionTestにテストケースを追加](../../commit/4256d6f8bcd63ed19f409c64d4b09733ee39fa28)
- [【9-4】 MemberCollectionTestのテストケースの完成](../../commit/5bffe270432473fec7365efa1c50113fb51c6e82)
- [【9-5】 MemberCollectionの失敗](../../commit/89f652d8b52affff5d8cfce47e7bde9f115ed1cb)
- [Revert &quot;【9-5】 MemberCollectionの失敗&quot;](../../commit/ad73b94b3d7f390a625b24db2eb9e0cf5a4fa2cd)
- [【9-6】 InquiryCsvBuilderTestクラス](../../commit/f03af6f14479c306035403dd0614eae885fe4478)
- [【9-7】 InquiryCsvBuilderTestクラス](../../commit/7a0cf549488990b4dd5697cd0d0d5862d1499ea2)
- [【9-8】 InquiryCsvBuilderTestクラスのCSVのテストを実装](../../commit/29fb521d4a8224015062028c58d84c159fbc6e17)
- [【9-9】 InquiryクラスにsetId()メソッドを追加](../../commit/fb795c950e4b1b0b341626eda6ebc87f1f461d7c)
- [【9-10-pre】 Composerでhautelook/alice-bundleとliip/functional-test-bundleをインストール](../../commit/627025522d2620dd3548e8bede6bc8e967216427)
- [【9-10-pre2】 HautelookAliceBundleとLiipFunctionalTestBundleを有効化](../../commit/bd5513818e7d38751b0921581188f1737be40ee5)
- [【9-10】 test環境でのSQLiteおよびLiipFunctionalTestBundleの設定](../../commit/eb7f3cf0fc9b917f627be2d8ba72488f83cc8cae)
- [【9-11】 dev環境でのバンドル向け設定](../../commit/ca79345fe7aa42ef7e1f9d330f03e1b2d102c758)
- [【9-12】 ブログ記事のフィクスチャデータ](../../commit/c659d0bbb1d3fb76544b4b03e66e1aed2e87ca78)
- [【9-13】 BlogArticleLoaderクラス](../../commit/4a5716c6dfb6e175561a0207efae3e62d7e2bbab)
- [【9-14】 ブログ記事一覧ページのアクション](../../commit/f40b34d0ffa8437e708a8924b3840bb7471cc618)
- [【9-14-after】 ブログ記事一覧ページのテンプレート](../../commit/9cf1c8ea812dc6a54a6d7049e845a3ba5181df1f)
- [【9-15】 ブログ記事一覧のテスト](../../commit/b4ae24c0039ef86dc4d58e124b5a7be9ee3ebfa2)
- [【9-16】 ブログ記事一覧のテストを修正](../../commit/1d73ed58e85e13b9ac16078398d0a183447690e5)


# 参照リンク

## 1章

- http://symfony.com/what-is-symfony
- http://framework.zend.com/
- http://laravel.com/
- http://cakephp.org/
- https://phalconphp.com/
− http://www.yiiframework.com/
- http://sensiolabs.com/
- http://www.php.net/ChangeLog-5.php#5.3.0
- http://symfony.com/blog/why-will-symfony-2-0-finally-use-php-5-3
- http://www.php-fig.org/
- https://getcomposer.org/
- http://pear.php.net/reference/PEAR-latest/PEAR/PEAR_Autoloader.html
- http://symfony.com/doc/current/contributing/community/releases.html#long-term-support-releases
- http://semver.org/
- http://symfony.com/doc/current/contributing/code/bc.html
- http://symfony.com/
- http://docs.symfony.gr.jp/
- https://twitter.com/symfony_japan/
- https://www.facebook.com/SymfonyJapan
- https://groups.google.com/forum/#!forum/symfony-users-ja
- クイックツアー
    - 日本語 http://docs.symfony.gr.jp/symfony2/quick_tour/index.html
    - 英語 http://symfony.com/doc/current/quick_tour/the_big_picture.html
- ガイドブック
    - 日本語 http://docs.symfony.gr.jp/symfony2/book/index.html
    - 英語 http://symfony.com/doc/current/book/index.html
- ベストプラクティス
    - 日本語 http://docs.symfony.gr.jp/symfony2/best_practices/index.html
    - 英語 http://symfony.com/doc/current/best_practices/index.html
- クックブック
    - 日本語 http://docs.symfony.gr.jp/symfony2/cookbook/index.html
    - 英語 http://symfony.com/doc/current/cookbook/index.html
- コンポーネント
    - 日本語 http://docs.symfony.gr.jp/symfony2/components/index.html
    - 英語 http://symfony.com/doc/current/components/index.html
- リファレンス
    - 日本語 http://docs.symfony.gr.jp/symfony2/reference/index.html
    - 英語 http://symfony.com/doc/current/reference/index.html
- 貢献
    - 日本語 http://docs.symfony.gr.jp/symfony2/contributing/index.html
    - 英語 http://symfony.com/doc/current/contributing/index.html
- ブログチュートリアル http://docs.symfony.gr.jp/symfony2/sf2-blog-tutorial/
- Symblogチュートリアル http://symblog.ganchiku.com/
- Jobeetチュートリアル http://jobeet.symfony.gr.jp/
- Twigリファレンス http://twig.sensiolabs.org/documentation
- Doctrine ORMリファレンス http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/
- http://ja.stackoverflow.com/
- http://ja.stackoverflow.com/questions/tagged/symfony2

## 第2章

- XAMPP https://www.apachefriends.org/jp/index.html
- MAMP https://www.mamp.info/en/
- http://symfony.com/doc/current/cookbook/configuration/web_server_configuration.html
- http://symfony.com/doc/current/components/yaml/yaml_format.html
- http://symfony.com/doc/current/reference/configuration/framework.html#profiler
- http://twig.sensiolabs.org/

## 第3章

- http://twig.sensiolabs.org/documentation
- http://symfony.com/doc/current/reference/twig_reference.html
- http://symfony.com/doc/current/reference/forms/twig_reference.html
- http://symfony.com/doc/current/reference/twig_reference.html#path

## 第4章

- http://twig.sensiolabs.org/doc/functions/include.html
- http://symfony.com/doc/current/reference/twig_reference.html#render
- http://getbootstrap.com/getting-started/#download
- http://jquery.com/download/
- http://fortawesome.github.io/Font-Awesome/
- http://symfony.com/doc/current/reference/twig_reference.html#asset
- http://symfony.com/doc/current/reference/twig_reference.html#form
- http://www.w3.org/TR/html5/forms.html#attr-fs-action
- http://swiftmailer.org/
- https://www.gmail.com/intl/ja/mail/help/about.html
- http://twig.sensiolabs.org/doc/templates.html#template-inheritance
- http://symfony.com/doc/current/reference/configuration/swiftmailer.html

## 第5章

- http://www.doctrine-project.org/
- http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/php-mapping.html
- http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/yaml-mapping.html
- http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/xml-mapping.html
- http://jp2.php.net/manual/ja/class.datetimeinterface.php
- http://symfony.com/doc/current/book/doctrine.html
- http://www.doctrine-project.org/projects/orm.html
- http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/annotations-reference.html

## 第6章

- https://github.com/ircmaxell/password_compat
- http://symfony.com/doc/current/reference/configuration/security.html
- http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/query-builder.html
- http://www.doctrine-project.org/api/common/2.5/class-Doctrine.Common.Collections.ArrayCollection.html
- http://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/annotations/routing.html
- http://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/annotations/converters.html

## 第7章

- http://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html
- http://symfony.com/doc/current/components/http_foundation/introduction.html#serving-files
- http://symfony.com/doc/current/components/console/introduction.html
- http://symfony.com/doc/current/components/console/helpers/questionhelper.html
- http://symfony.com/doc/current/bundles/FOSRestBundle/index.html
- http://jmsyst.com/bundles/JMSSerializerBundle
- http://symfony.com/doc/current/bundles/FOSRestBundle/5-automatic-route-generation_single-restful-controller.html#define-resource-actions
- https://github.com/nelmio/NelmioApiDocBundle/blob/master/Resources/doc/index.md
- https://github.com/nelmio/NelmioCorsBundle/blob/master/README.md
- http://www.w3.org/TR/cors/
- http://csv.thephpleague.com/

## 第8章

- http://symfony.com/doc/current/components/config/definition.html
- https://ja.wikipedia.org/wiki/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E6%8C%87%E5%90%91%E3%82%A2%E3%83%BC%E3%82%AD%E3%83%86%E3%82%AF%E3%83%81%E3%83%A3
- http://jmsyst.com/bundles/JMSDiExtraBundle
- http://symfony.com/doc/current/components/dependency_injection/index.html
- http://symfony.com/doc/current/components/config/index.html

## 第9章

- https://phpunit.de/
- https://phpunit.de/manual/current/ja/installation.html
- https://phpunit.de/manual/current/ja/organizing-tests.html#organizing-tests.xml-configuration
- https://phpunit.de/manual/current/ja/appendixes.configuration.html#appendixes.configuration.testsuites
- https://github.com/piece/stagehand-testrunner/wiki
- https://github.com/nelmio/alice
- https://github.com/fzaninotto/Faker
- https://github.com/hautelook/AliceBundle
- https://github.com/liip/LiipFunctionalTestBundle
- https://msdn.microsoft.com/ja-jp/library/ms256115(v=vs.110).aspx
- http://symfony.com/doc/current/components/dom_crawler.html
- http://symfony.com/doc/current/components/css_selector.html
- https://phpunit.de/manual/current/ja/index.html
- http://symfony.com/doc/current/book/testing.html


## Appendix 1

- http://symfony.com/doc/current/reference/forms/types.html
- http://symfony.com/doc/current/reference/constraints.html
- http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/types.html#mapping-matrix
- http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/annotations-reference.html
- http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/query-builder.html

## Appendix 2

- https://getcomposer.org/Composer-Setup.exe

# ライセンス

本サンプルコードのライセンスは、[MITライセンス](https://opensource.org/licenses/MIT)です。
