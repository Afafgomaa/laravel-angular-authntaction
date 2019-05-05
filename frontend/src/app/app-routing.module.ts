import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { LoginComponent } from './components/login/login.component';
import { SingupComponent } from './components/singup/singup.component';
import { ProfileComponent } from './components/profile/profile.component';
import { RequestRestComponent } from './components/password/request-rest/request-rest.component';
import { ResponseResetComponent } from './components/password/response-reset/response-reset.component';

const routes: Routes = [
  {path:"login", component:LoginComponent},
  {path:"singup", component:SingupComponent},
  {path:"profile", component:ProfileComponent},
  {path:"request-password-reset", component:RequestRestComponent},
  {path:"response-password-reset", component:ResponseResetComponent},
  {path:" " , redirectTo:"login"}

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
