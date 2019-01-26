@extends('layout.nav')
<div class="relative">
    @section('content')
        <main>
            <div class="flex flex-c-c header">
                <div class="flex-c-c flex ">
                    <h1 class="flex-c-c flex title-responsive">Gestion des données personnelles</h1>
                </div>
            </div>
            <div class="row">
                <div class="col s12 flex flex-j-s">
                    <div class="contenus">
                        <h3>Gestion des données personnelles</h3>
                        <p>GreenPaper s'engage à ce que la collecte et le traitement de vos données, effectués à partir de
                            notre site, soient conformes à la loi Informatique et Libertés.</p>
                        <p>Chaque formulaire ou téléservice limite la collecte des données personnelles au strict nécessaire
                            et indique clairement :
                        </p>
                        <br>
                        <p>l'objectif du recueil de ces données (finalité) ;<br>
                            si ces données sont obligatoires ou facultatives pour la gestion de votre demande ;
                            qui pourra en prendre connaissance (uniquement GreenPaper en principe, sauf précision contraire
                            dans le formulaire de saisie lorsqu'une transmission à un tiers est strictement nécessaire pour
                            la gestion de votre demande) ;<br>
                            vos droits "Informatique et Libertés" (droits d'opposition , d'accès et de rectification) et la
                            façon de les exercer auprès de GreenPaper. Vous pouvez également définir le sort de vos données
                            après votre décès.<br>
                            Les données personnelles recueillies dans le cadre des services proposés sur <a
                                href="{{url('/')}}">Green'Paper</a> sont transmises et conservées selon des protocoles
                            sécurisés ; elles ne sont pas conservées au-delà de la durée nécessaire à la gestion des
                            missions légales de GreenPaper.
                        </p>
                        <h3>À propos des cookies</h3>
                        <p>Nous utilisons différents cookies sur le site pour améliorer l’interactivité du site et nos
                            services.</p>
                        <p>Qu'est-ce qu'un "cookie" ?<br></p>
                        <p>Un "cookie" est un fichier de taille limitée, généralement constitué de lettres et de chiffres,
                            envoyé par le serveur internet au fichier cookie du navigateur situé sur le disque dur de votre
                            ordinateur.
                        </p>
                        <p><a href="https://www.cnil.fr/fr/cookies-les-outils-pour-les-maitriser">En savoir plus sur les
                                cookies, leur fonctionnement et les moyens de s’y opposer</a></p>
                        <div class="col s12">
                            <table class="marg-t40">
                                <thead>
                                <tr>
                                    <th class="center-align white-text" style="background-color:#41b883">Durées d'utilité
                                        administrative (DUA) applicables aux principales procédures gérées par la CNIL
                                        La DUA couvre la durée de conservation en base active et en archives internes
                                    </th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="col s12 marg-t40">
                            <table class="striped">
                                <thead>
                                <tr>
                                    <th class="center-align white-text" style="background-color:#41b883">Procédure</th>
                                    <th class="center-align white-text" style="background-color:#41b883">
                                        DUA des informations collectées<br>dans le cadre de la procédure
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Demande d'information auprès de la CNIL</td>
                                    <td>3 ans après la clôture de la demande</td>
                                </tr>
                                <tr>
                                    <td>Demande de conseil d'un responsable de fichier</td>
                                    <td>10 ans après la clôture du dossier</td>
                                </tr>
                                <tr>
                                    <td>Déclaration, demande d'avis et demande d'autorisation</td>
                                    <td>Durée d'existence du fichier concerné + 1 an</td>
                                </tr>
                                <tr>
                                    <td>Notification d'une violation de données personnelles</td>
                                    <td>Durée d'existence du fichier concerné + 1 an</td>
                                </tr>
                                <tr>
                                    <td>Désignation d'un correspondant informatique et libertés (CIL)L</td>
                                    <td>Durée d'activité du CIL + 5 ans</td>
                                </tr>
                                <tr>
                                    <td>Demande de conseil d'un CIL</td>
                                    <td>Durée d'activité du CIL + 5 ans</td>
                                </tr>
                                <tr>
                                    <td>Demande de délivrance d'un label</td>
                                    <td>10 ans après la clôture du dossier de demande</td>
                                </tr>
                                <tr>
                                    <td>Plainte auprès de la CNIL</td>
                                    <td>10 ans après la clôture du dossier</td>
                                </tr>
                                <tr>
                                    <td>Demande de droit d'accès indirect</td>
                                    <td>10 ans après la clôture du dossier</td>
                                </tr>

                                <tr>
                                    <td>Contrôle</td>
                                    <td>5 ans après la clôture du dossier</td>
                                </tr>
                                <tr>
                                    <td>Mise en demeure et sanction</td>
                                    <td>5 ans après la clôture du dossier</td>
                                </tr>
                                <tr>
                                    <td>Saisine du correspondant informatique et libertés de la CNIL</td>
                                    <td>Année civile de la demande + 5 ans</td>
                                </tr>


                                <tr>
                                    <td>Contact webmestre</td>
                                    <td>6 mois après la réception de la demande</td>
                                </tr>
                                <tr>
                                    <td>Observatoire des élections</td>
                                    <td>1 an après la réception du témoignage</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
</div>

@endsection
<!-- FOOTER-->
