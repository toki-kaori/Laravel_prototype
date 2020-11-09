<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * ユーザ一覧表示
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allusers = User::all();
        return view('admin.users',['users' => $allusers]);
    }

    /**
     * ユーザ新規作成画面表示
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user_create');
    }

    /**
     * ユーザ新規作成postメソッド
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //リクエストパラメータにバリデーションをかける
        $this->validator($request->all())->validate();

        //Userモデルを使って新規作成
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'authority' => $request->authority,
            'messeage' => $request->messeage,
        ]);

        //登録が終わったらユーザリスト一覧画面にリダイレクトさせる
        return redirect( '/admin/users' );
    }

    /**
     * ユーザ登録時のバリデーション
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:50','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'authority' => ['required', 'integer'],
            'messeage' => ['nullable','string','max:255'],
        ]);
    }

    /**
     * 各ユーザ表示
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.user_profile',['user' => $user]);
    }

    /**
     * 各ユーザの編集画面表示
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user_edit',['user' => $user]);
    }

    /**
     * 各ユーザの更新処理putメソッド
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * ユーザ削除
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}