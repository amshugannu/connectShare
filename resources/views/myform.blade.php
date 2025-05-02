<!-- <h1>login form </h1>

<form action="/log" method="POST">
    @csrf
    Enter Name:
    <input type="text" name="username" >
    Enter password:
    <input type="password" name="password" >
    <button type="submit" value="submit">Submit</button>
</form> -->

<!-- print_r($errors)//shwo all error in loop -->



<h1> upload files</h1>
<form action="upload" method="post" encrypt="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <button type="submit" value="submit">Submit</button>
</form>