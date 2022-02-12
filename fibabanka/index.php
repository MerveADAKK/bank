<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.btn {
  border: 2px solid black;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}

/* Green */
.fiba {
  border-color: #04AA6D;
  color: green;
}

.fiba:hover {
  background-color: #04AA6D;
  color: white;
}

/* Blue */
.banka {
  border-color: #2196F3;
  color: dodgerblue;
}

.banka:hover {
  background: #2196F3;
  color: white;
}

</style>
</head>
<body>
<img src="https://www.trbanka.com/logo/fibabanka.png"
alt="https://www.trbanka.com/logo/fibabanka.png"height="142">
<h1>Fintern Jr. Software Engineer Vaka Çalışması</h1>
<h3> MERVE ADAK <h3>

<button class="btn fiba" onclick="document.location='Create.php'">Create</button>
<button class="btn banka" onclick="document.location='Delete.php'" >Delete</button>
<button class="btn fiba" onclick="document.location='Update.php'">Update</button>
<button class="btn banka" onclick="document.location='List.php'">List</button>

</body>
</html>
