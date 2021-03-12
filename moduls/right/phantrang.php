
        <style type="text/css">
          .container {
            width: 500px;
            margin: auto;
            text-align: center;
          }
          .pagination {
            width: 400px;
            margin-left: 50px;
          }
          .pagination a {
            display: block;
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
          }

          .pagination a.active {
              background-color: #2779e4;
              color: white;
          }

          .pagination a:hover:not(.active) {
            background-color: #ddd;
            background-color: yellow;
          }
        </style>

      <div class="container">
        <!-- <h2>Freetuts.net hướng dẫn định dạng phần Phân trang</h2> -->

        <div class="pagination">
          <a href="#">&laquo;</a>
          <a href="#">1</a>
          <a class="active" href="#">2</a>
          <a href="#">3</a>
          <a href="#">4</a>
          <a href="#">5</a>
          <a href="#">6</a>
          <a href="#">7</a>
          <a href="#">&raquo;</a>
        </div>
      </div>
