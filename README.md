基本からしっかり学ぶSymfony2入門　サポートサイト
================================================

本書の内容についてのご質問や誤植のご報告は、[issue](https://github.com/hidenorigoto/symfony2-book/issues)にてお願いします。

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
- [【6-3】 Inquiryエンティティクラスにバリデーション定義を追�](../../commit/91051f86a812570c3fea00e9feba3c5e0ebfcd8d)
- [【6-4-before】 管理者用画面の基本部分の作成](../../commit/54ebe1c2925a2b7106918258049bd38570a5c9a4)
- [【6-4】 セキュリティコンフィギュレーション](../../commit/b01a0fca60560ae295b1d385ac5323815e9a1a1f)
- [【6-5】 お問い合わせ一覧のコントローラ](../../commit/de4ed3f88d5c1836dbce84458c9c79f4fdc2abf6)
- [【6-6】 お問い合わせ一覧のテンプレート](../../commit/63a90b7cbce1d53fb640b13f48b5b6b192f0398c)
- [【6-7】 管理者用画面メニューのテンプレート修正](../../commit/e32fc9fd2463a3eff5fe9a01482d43e8be439a2d)
- [【6-8】 Inquiryエンティティにプロパティとコンストラクタを追加](../../commit/692710c518d1437973a326dc0709e6f3c55296db)
- [【6-8-after】 getter/setterの自動生成](../../commit/c9436325c043cd6c13a0c5d6efbdcb4b805491da)
- [【6-9】 Inquiryエンティティでバリデーショングループの追加](../../commit/b8aad065ce6dc1b6024d0547842d7cd28075ed0f)
- [【6-10】 お問い合わせ編集のコントローラ](../../commit/f4a3869f053452171af417c6b0cbd2b7c836a0c6)
- [【6-11】 createInquiryForm()メソッド](../../commit/26cf814d505f1ae818fc0e9dd8fc7cb2b5838773)
- [【6-12】 inputAction()メソッド](../../commit/46852d2e66123862f208652abe3988c706018187)
- [【6-13】 inputPostAction()メソッド](../../commit/3c33f8774af7120552968f23a0b41a093ea727b8)
- [【6-14】 お問い合わせ編集のテンプレート](../../commit/80e0864a02f1eb52fa8731693a4ff4483ff80421)
- [【6-15】 お問い合わせ一覧のテンプレート修正](../../commit/328f2bd313ed7e8e86460751efc2c76046d80380)
- [【6-16】 お問い合わせ一覧のコントローラ](../../commit/ad75961ac8ab8d0fcacdadd274da84c0636b134b)
- [【6-17】 findAllByKeyword()メソッドを実装](../../commit/69f4a37deeb5d0e62b2fb005fbae39040d893634)
- [【6-18】 お問い合わせ検索フォームをテンプレートに追加](../../commit/852b017a37a45f3164879214cae9cb9f0d8da203)
- [【7-pre】 ComposerでDoctrineFixtureBundleをインストール](../../commit/7f4ad888eab9e829a2962fb703f86925d4c77be0)
- [【7-1】 AppKernelにてバンドルを有効化](../../commit/79a5062b18d7c5be1b85cf14540c663bfcced0ad)
- [【7-2】 お問い合わせフィクスチャ](../../commit/cca16bca25512698b028c7428d43dd17fc41b47d)
- [【7-3-pre】 Composerでleague/csvをインストール](../../commit/6e4c3935ba72c587d8ed2f437fe30d530d2ceba9)
- [【7-3】 AdminInquiryListControllerを修正](../../commit/b4afc963f86930c15d988c7cfef596e5101d6bfa)
- [【7-4】 お問い合わせ一覧のテンプレート修正](../../commit/551f7eeb072041d71753011a8c1c0cc3a65d7b68)
- [【7-5】 debug:routerコマンドのソース](../../commit/7dfedfedce924a136549daaf84f40a9660161c0e)
- [【7-6】 未処理お問い合わせ一覧通知コマンド](../../commit/3d3b41e3c9f6d428ae4e0e2b1d47d812645a9234)
- [【7-7】 InquiryRepositoryに未処理お問い合わせ一覧取得メソッドを追加](../../commit/3ceebee6e1b5d3997d4f7d9647732d89868c0098)
- [【7-8】 未処理通知用のテンプレート](../../commit/2982828dff554c318136dced016379666f41e147)
- [【7-9】 parameters.yml.distに追加](../../commit/f69c606778b333cf8385c7cd09977f845d943efa)
- [【7-10】 parameters.ymlに追加](../../commit/5912670612051420b77915b2563664eb13a33a62)
- [【7-11】 config.ymlに追加](../../commit/a06eb6b5ac754c737ce4489f1c2e2dae50f93307)
- [【7-12】 未処理お問い合わせ通知コマンドのインタラクティブ化](../../commit/30cb3657f3cd156d90071b43e31808f811f3384d)
- [【7-13-pre-composer】 Composerでfriendsofsymfony/rest-bundle、jms/serializer-bundleをインストール](../../commit/0d190106553d1573be14793fbf17c8177a7c1309)
- [【7-13】 AppKernelにてバンドルを有効化](../../commit/9527a96ab367b4a3a2c8b885810e2b74cfc0b640)
- [【7-14-pre】 Concertエンティティをコマンドで作成](../../commit/6bc878d89233e9c4adbea0aa5ae03545ea67cf65)
- [【7-14-pre2】 Concertエンティティのマッピング定義を修正](../../commit/bd38ffaa23687963f05c5bd18bf813d55c67152f)
- [【7-14-pre3】 LoadConcertDataを追加](../../commit/272a1b74338571e930cabf0e309c4957b99dc83f)
- [【7-14】 ConcertエンティティクラスにAPI公開の設定を記述](../../commit/9da887f9e3a099a8000020f4f87da4c37fa76dfa)
- [【7-15】 公演情報のシリアライズ確認用テストコマンド](../../commit/fb667a73eb217520b4d661f5455d1d3f09845c1e)
- [【7-16】 公演情報APIエンドポイント用のコントローラのひな型](../../commit/77fa0a573cbc4ef5b04ff946ef1973ee8f0caaec)
- [【7-17】 APIエンドポイント用ConcertControllerにgetConcertsAction()メソッドを追加してルートを定義](../../commit/f7be3849e47c97572c406882b2e53a4c9cf86a52)
- [【7-18】 ConcertControllerのgetConcertsAction()メソッドを実装](../../commit/5001e060a6ccf799e3c383f81073b6136b307058)
- [【7-19】 FOSRestBundleの動作の設定](../../commit/4a02d53618e2826f13d13032382a1016218e59a7)
- [【7-20】 getConcertsAction()を修正](../../commit/97e15c837553de617e40303cb120a763e296bfd1)
- [【7-21】 getConcertsAction()メソッドの@Rest\Getアノテーションを削除](../../commit/80469df1180c22fcc1243ccedbed4a82bc708bd0)
- [【7-22】 FOSRestBundleの機能を利用したルーティング設定](../../commit/50a8c53aa0b7d82c9d98b445a77a8c788636dc9c)
- [【7-23-pre】 Composerでnelmio/api-doc-bundleを追加](../../commit/f5a6784d5490a0dedd02629c2bf0059689cd8205)
- [【7-23-pre2】 NelmioApiDocBundleを有効化](../../commit/0c2ecbb225a880e3778142233d04b6cf74c71111)
- [【7-23】 開発用ルート設定にAPIドキュメントのルートを追加](../../commit/1a6165d66ee9614777a845096c77681123a40d97)
- [【7-24】 APIドキュメントのデフォルト設定を追加](../../commit/de6a7110ec4c7518e26b17ae9500e891423f4fe1)
- [【7-25】 公演情報APIエンドポイントのAPIドキュメント設定](../../commit/c174fada26fff5e4962d119f89898f3ef2f43359)
- [【7-26-pre】 Composerでnelmio/cors-bundleをインストール](../../commit/6e6654bcf80b08d66b35aade06eb861b7e3e8bc2)
- [【7-26-pre2】 NelmioCorsBundleを有効化](../../commit/67032b3d2152424d11a9340e9d1ea7ef648bd02a)
- [【7-26】 NelmioCorsBundleの設定](../../commit/ec3514d75217ff468fabbed54f36df098533390c)
- [【7-27】 CORS動作確認画面のHTML](../../commit/72a02a0c2767aec83005ffa9a60858bbe960a4f5)
- [【7-28】 NelmioCorsBundleの設定を変更](../../commit/b4ed5d695dca573793362f63e29fe0d525a5e27b)
- [【8-1】 InquiryCsvBuilderクラスを作成](../../commit/5170712756f6a891565791dc7fce181f429e3ed4)
- [【8-2】 AppExtensionクラス](../../commit/43aa1457b789ef4536b047c77f2a20495474cd1e)
- [【8-3】 services.ymlのサービス定義の例](../../commit/4d666f4a95f3ca635431782c71516d32082e152f)
- [【8-4】 サービスを確認するテストコマンド](../../commit/b59406beeb56e09622e6d1f647967bc69f8c9ae7)
- [【8-5-before】 Composerでjms/di-extra-bundleを追加](../../commit/64f3ed2576bdd11bfd43c03efa3fea6b66b597eb)
- [【8-5】 バンドルを有効化](../../commit/b0481acfa16b4e49f9fbedf91ffb26c796a55386)
- [【8-6】 JMSDiExtraBundleの動作の設定](../../commit/61fc4f4588a90664bc3d604d77a2613b11b94570)
- [【8-7】 InquiryCsvBuilderにサービス定義アノテーションを追加](../../commit/02f9e5c87d68f54d12b6efe864e94ad02681bb12)
- [【8-8】 services.ymlでサービス定義を削除](../../commit/83ecfb8a87aeac6fe832e0d5dcbf27db7a5baec9)
- [【8-9】 Memberエンティティクラス](../../commit/1fae1ada29e52b64508e08557c22c02c17e1e4bf)
- [【8-10】 MemberCollectionクラス](../../commit/67667b2fba5f26516c1ca1375c59a934610301ac)
- [【8-11】 団員一覧の定義](../../commit/8639ae085e279233b6e11694b39c48de019e3c32)
- [【8-12】 AppBundleのConfigurationクラス](../../commit/ca861bee4396a700d124b7ba0cf69f65a77fba97)
- [【8-13】 AppBundleのAppExtensionクラス](../../commit/6388eb659024f19386650ca9518003ac221b6662)
- [【8-14】 サービスコンテナのMemberCollectionサービス生成コード](../../commit/13beefec9d72339ce122e81f0fc1b40654b309aa)
- [【8-15】 団員一覧ページのコントローラ](../../commit/efea671ffb32144cac47917e4dd037ba8eaec962)
- [【8-16】 団員一覧ページのテンプレート](../../commit/4f0af64c3f997e45b2fe8793fcab824d75437881)
- [【9-pre】 ComposerでPHPUnitをインストール](../../commit/c992eec0a940ef2416256c7583dcc866e1b46791)
- [【9-1】 PHPUnitの設定を修正](../../commit/837746f41506e82c2d749bd58fd87623f1cdd4ef)
- [【9-1-after】 不要なファンクショナルテストの削除](../../commit/fb64fa689ee0e4b3b8e5b4ba6fcaa6b7eba750b7)
- [【9-2】 MemberCollectionのテストクラス](../../commit/3fea22ed663cf2107f12677c6e3934bd81096d9f)
- [【9-3】 MemberCollectionTestにテストケースを追加](../../commit/b7dafb86760abf93ae36cfff238b4c08a2ac2532)
- [【9-4】 MemberCollectionTestのテストケースの完成](../../commit/c55fb2855b4a481f4012d5121dd95391d74d97e3)
- [【9-5】 MemberCollectionの失敗](../../commit/4a59a3d307ebb27e532defa17af96ea509175316)
- [Revert &quot;【9-5】 MemberCollectionの失敗&quot;](../../commit/4ad7888495ed6e3d5e5bca0ae0c371ccb38b79b7)
- [【9-6】 InquiryCsvBuilderTestクラス](../../commit/e6a777a33a81d359a415a8ceda2dfb44a5f8ac38)
- [【9-7】 InquiryCsvBuilderTestクラス](../../commit/1e51ba8baaebfc8c49d52084d9d2cc9cd98332d6)
- [【9-8】 InquiryCsvBuilderTestクラスのCSVのテストを実装](../../commit/35d0021eae35d343d58f1fd370119f2ab39d65c0)
- [【9-9】 InquiryクラスにsetId()メソッドを追加](../../commit/0206bb592df47d9fe7d3a5e696adf405d558ef2e)
- [【9-10-pre】 Composerでhautelook/alice-bundleとliip/functional-test-bundleをインストール](../../commit/53be5f8d99fb9e2f87cb82011c31f0a5aec68c65)
- [【9-10-pre2】 HautelookAliceBundleとLiipFunctionalTestBundleを有効化](../../commit/ac7fe8a06f60567bf134d240891cacf86f95c729)
- [【9-10】 test環境でのSQLiteおよびLiipFunctionalTestBundleの設定](../../commit/75e1035ee840267e6a7020ddf009b5b4b4a564c3)
- [【9-11】 dev環境でのバンドル向け設定](../../commit/7ed05d47026b94f0db85f887e38313abe1b3997f)
- [【9-12】 ブログ記事のフィクスチャデータ](../../commit/773b4dbff33329c182b596c219c9445e77f39841)
- [【9-13】 BlogArticleLoaderクラス](../../commit/52d58a49d00175866d58dff160066f9a7247db97)
- [【9-14】 ブログ記事一覧ページのアクション](../../commit/7a44f2da7b4628f95335f35f1101fc1a56f49adc)
- [【9-14-after】 ブログ記事一覧ページのテンプレート](../../commit/9034224dcdeae1a43a94aadb019f97f79a614e80)
- [【9-15】 ブログ記事一覧のテスト](../../commit/5be1fc212076534a63b70ffb263f1016d4652afe)
- [【9-16】 ブログ記事一覧のテストを修正](../../commit/20185a9a57bcf8b6f55c5bb58736b794a9bdf562)


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
