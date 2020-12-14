import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  { path: '', redirectTo: 'formations', pathMatch: 'full' },
  { path: 'formations', loadChildren: './pages/formations/formations.module#FormationsPageModule' },
  { path: 'formations/:id', loadChildren: './pages/formation-details/formation-details.module#FormationDetailsPageModule' },
 

];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
    
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
