import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent implements OnInit {
  isLoggedin=false;
  constructor(private router:Router) {
    if(localStorage.getItem('Loginuser')){
      this.isLoggedin=true;
    }
   }

  ngOnInit(): void {
  }
  
navbarCollapsed = true;

toggleNavbarCollapsing() {
    this.navbarCollapsed = !this.navbarCollapsed;
}

onLogout(){
  localStorage.removeItem('Loginuser');
  this.isLoggedin=false;
  this.router.navigate(['/']);
}

}
