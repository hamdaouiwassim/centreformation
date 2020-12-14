import { Component, OnInit } from '@angular/core';
import { Observable } from 'rxjs';
import { FormationService  } from 'src/app/services/formation.service';

@Component({
  selector: 'app-formations',
  templateUrl: './formations.page.html',
  styleUrls: ['./formations.page.scss'],
})
export class FormationsPage implements OnInit {
  results: any;
  constructor(public formationService : FormationService) { }

  ngOnInit() {
     //this.getall()
     this.results= this.formationService.getAll()
  }


}
