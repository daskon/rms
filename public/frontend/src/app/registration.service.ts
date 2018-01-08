import {Injectable} from "@angular/core";
import {Http} from "@angular/http";

@Injectable()

export class RegistrationService{

    constructor(private http: Http){}

   getSignup(){
        return this.http.get('http://localhost:4200/signup');
   }
}
