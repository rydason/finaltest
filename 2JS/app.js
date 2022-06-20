$(function () {
    $("#form-ajax").click(function (e) {
        // 入力された値を取得
        e.preventDefault();
        zipcode = $('#zipcode').val();
        // urlを設定
        var url = "https://zipcloud.ibsnet.co.jp/api/search";
        // 送るデータを成形する
        var param = { zipcode: zipcode };
        // サーバーと通信(Ajax)
        
        $.ajax({
            type: "POST", 
            cache: false,
            data: param,
            url: url,
            dataType: "jsonp"
        })
        .done(function (res) {
            if (res.status != 200) {
                // 通信には成功。APIの結果がエラー
                // エラー内容を表示
                $('#zip_result').html(res.message);
            } else {
                //住所を表示
                let html = `
                <div>
                  <p>${"a. 都道府県コード:" + res.results[0]["prefcode"]}</p>
                  <p>${"b. 都道府県:" + res.results[0]["address1"]}</p>
                  <p>${"c. 市区町村:" + res.results[0]["address2"]}</p>
                  <p>${"d. 町域:" + res.results[0]["address3"]}</p>
                  <p>${"e. 都道府県(カナ):" + res.results[0]["kana1"]}</p>
                  <p>${"f. 市区町村(カナ):" + res.results[0]["kana2"]}</p>
                  <p>${"g. 町域(カナ):" + res.results[0]["kana3"]}</p>
                </div> `
                $('#zip_result').append(html);
            }

        })
        .fail(function (error) {
            console.log(error);
            $('#zip_result').html("<p>通信エラーです。時間をおいてお試しください</p>");
        });
    });
});