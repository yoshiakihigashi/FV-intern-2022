# FV-intern-2022

# ✏️TODO アプリを開発しよう！

## 🗒 課題概要

- 未完成の TODO アプリに、追加機能リスト（スプシ参照）にある機能を実装してください。
- 最終日にシステム開発部内でコードレビュー会を開催し、フィードバックを行います。

<br>

## 👆 手順１：「intern」フォルダを Github に Push しよう！

- VSCode でデスクトップの「intern」フォルダを開く
- ターミナルを開く
- github の新規リポジトリとして Push!!（詳しいやり方は聞いてください）

<br>

## 👆 手順 2：Docker を起動

- docker compose up -d を実行
- npm run dev を実行（Bootstrap を実行）
- ブラウザで"http://localhost/80"の URL を確認
- TODO アプリのログイン画面が表示されていれば OK！🙆

## 👆 手順 3：実装を行う

develop ブランチから作業用のブランチを切ってから作業をはじめましょう！

1. 【main ブランチ】から【develop ブランチ】に切り替え<br>`git checkout -b develop`
2. 【develop ブランチ】から【作業ブランチ】を作成 & 切り替え<br>`git checkout -b xxxx`（例：タスク編集機能の追加＝ブランチ名"add-task-edit"など）
3. 現在のブランチを確認（【作業ブランチ名】が緑色になっていれば OK）<br>`git branch`
4. 追加機能リストに沿って、１機能づつ機能を追加していく
5. 機能単位で【commit】する
6. 作業が完了したら【push】する
7. github で【develop ブランチ】に対して【Pull Request】を行う
8. 【Pull Request】の変更を【develop ブランチ】にマージ
9. 【develop ブランチ】に移動<br> `git checkout develop`
10. ローカルの【develop ブランチ】にリモートの【develop ブランチ】の変更分を Pull <br>`git pull origin develop`

<br>
    
⏪　2~10 を繰り返す

<br>

## 🚨 開発におけるルールなど

- 開発でわからないことはお気軽に質問してもらって OK です 👌
- 但し、ちょっと検索すればわかる程のことは「一旦、自分でググってみてください 😊」と回答する場合があります
- インターン生同士で教え合うのも大歓迎です！！🙆

<br>

## 💻 開発環境

- PHP
- Laravel9
- MySQL
- Docker(Docker Desktop)
- Bootstrap(UI フレームワーク)
- Visual Studio Code
- Seaquel Ace (DB 可視化ツール)

<br>

<br>

## LINUX コマンド

|           |                          |
| --------- | ------------------------ |
| ls        | 現在の階層の一覧表示     |
| cd xxx    | xxx ディレクトリに移動   |
| cd ..     | 上階層ディレクトリに移動 |
| cd        | ホームディレクトリに移動 |
| mkdir xxx | xxx ディレクトリを作成   |

<br>

## docker コマンド

|                              |                                |
| ---------------------------- | ------------------------------ |
| docker compose ps            | 起動確認                       |
| docker compose up -d         | コンテナを立ち上げる           |
| docker compose up -d --build | ビルドしてコンテナを立ち上げる |
| docker compose down          | 停止                           |
| docker compose restart       | 再起動                         |

<br>

## git コマンド

- こちらを参照<br>
  - https://qiita.com/wann/items/688bc17460a457104d7d

|                              |                                         |
| ---------------------------- | --------------------------------------- |
| git clone 【url】            | 【url】のリポジトリをクローンする       |
| <br>                         |                                         |
| git stash                    | 現在の編集状態を退避                    |
| git stash -u                 | 新規ファイルも退避                      |
| git stash list               | 編集状態の一覧を表示                    |
| git stash apply stash@{番号} | 番号の状態を戻す                        |
| git stash drop stash@{番号}  | 番号の退避を消す                        |
| <br>                         |                                         |
| git branch                   | ブランチ一覧を表示                      |
| git branch 【xxx】           | 現在のブランチから【xxx】ブランチの作成 |
| git checkout 【xxx】         | 【xxx】ブランチに切り替え               |
| git add .                    | 編集した全ファイルをステージングに移動  |
| git add xxx.php xxx.js       | 指定したファイルをステージングに移動    |
| git commit -m 'xxx'          | xxx というコミットメッセージを追加      |
| git push origin xxx          | リモートの xxx へ送信（更新）           |
