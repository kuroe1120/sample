課題１

UI…ユーザーに見えるところ、データを表示させたりする出力部分を担当しています。

課題2

・一度把握してしまえば、開発作業をかなり効率的に進めることができる
・ソースコードの書き方をある程度統一してあるので、後に誰かが手を加えやすい

課題３

resources/views/admin/profileディレクトリ配下にcreate.blade.phpファイルを作成

public function add()
  {
      return view('admin.profile.create');
  }
  
resources/views/admin/profileディレクトリ配下にedit.blade.phpファイルを作成
  
  public function edit()
  {
      return view('admin.profile.edit');
  }
  