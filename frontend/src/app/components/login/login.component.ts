import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
form = {
  email:null,
  password:null
}
public error = null;
  constructor(private http:HttpClient) { }

  ngOnInit() {
  }

onSubmit(){
  return this.http.post('http://localhost:8000/api/login',this.form).subscribe(
    data => console.log(data),
    error => this.handelError(error)

  );
}

handelError(error){
  this.error = error.error.error;
}
}
