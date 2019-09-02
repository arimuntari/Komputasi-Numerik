#include <iostream>
#include <iomanip>
#include <cstdlib>

using namespace std;

int main()
{
    int opsi,baris,kolom;

    cout << "Input jumlah baris : "; cin >> baris;
    cout << "Input jumlah kolom : "; cin >> kolom;
    int matrikA[baris][kolom],matrikB[baris][kolom];

    system("cls");
    cout << "Input Data.\n\n";
    for(int i=0; i<2; i++){
        for(int a=0; a<baris; a++){
            for(int b=0; b<kolom; b++){
                if(i==0){
                    cout << "Data matrik A indeks ke-["<<a<<"]["<<b<<"] : "; cin >> matrikA[a][b];
                }else{
                    cout << "Data matrik B indeks ke-["<<a<<"]["<<b<<"] : "; cin >> matrikB[a][b];
                }
            }
        }
        cout << endl;
    }

    do{
    system("cls");
    cout << endl;
    cout << "Data tersimpan : ";
    cout << endl;
    cout << "Matrik A " << setw(25) << "Matrik B " << endl;
    cout << ".- " << setw(3*kolom+2) << " -." << setw(15) << ".- " << setw(3*kolom+2) << " -." << endl;

    for(int a=0; a<baris; a++){
        for(int b=0; b<kolom; b++){
            if(b==0){
                cout << "|" << setw(3) << matrikA[a][b] << " ";
            }
            else if(b==kolom-1){
                cout << " " << setw(3) << matrikA[a][b] << " |";
            }
            else{
                cout << setw(3) << matrikA[a][b];
            }
        }
        cout << setw(13);
        for(int b=0; b<kolom; b++){
            if(b==0){
                cout << "|" << setw(3) << matrikB[a][b] << " ";
            }
            else if(b==kolom-1){
                cout << " " << setw(3) << matrikB[a][b] << " |";
            }
            else{
                cout << setw(3) << matrikB[a][b];
            }
        }
        cout << endl;
    }

    cout << "'- " << setw(3*kolom+2) << " -'" << setw(15) << "'- " << setw(3*kolom+2) << " -'" << endl;
    cout << endl;
    cout << "Menu : \n";
    cout << "1. Penjumlahan matrik. \n";
    cout << "2. Pengurangan matrik. \n";
    cout << "3. Perkalian matrik. \n";
    cout << "4. Determinan matrik B. \n";
    cout << "5. Transpose matrik A. \n";
    cout << "6. Exit. \n\n";
    cout << "Pilih menu : "; cin >> opsi;
    cout << endl;

    if(opsi==1){
        cout << "Hasil penjumlahan matrik A dengan matrik B : \n";
        cout << ".- " << setw(3*kolom+2) << " -." << endl;
        for(int a=0; a<baris; a++){
            for(int b=0; b<kolom; b++){
                if(b==0){
                    cout << "|" << setw(3) << matrikA[a][b]+matrikB[a][b] << " ";
                }
                else if(b==kolom-1){
                    cout << " " << setw(3) << matrikA[a][b]+matrikB[a][b] << " |";
                }
                else{
                    cout << setw(3) << matrikA[a][b]+matrikB[a][b];
                }
            }
            cout << endl;
        }
        cout << "'- " << setw(3*kolom+2) << " -'" << endl;
        cout << endl;
        system("pause");
    }

    else if(opsi==2){
        cout << "Hasil pengurangan matrik A dengan matrik B : \n";
        cout << ".- " << setw(3*kolom+2) << " -." << endl;
        for(int a=0; a<baris; a++){
            for(int b=0; b<kolom; b++){
                if(b==0){
                    cout << "|" << setw(3) << matrikA[a][b]-matrikB[a][b] << " ";
                }
                else if(b==kolom-1){
                    cout << " " << setw(3) << matrikA[a][b]-matrikB[a][b] << " |";
                }
                else{
                    cout << setw(3) << matrikA[a][b]-matrikB[a][b];
                }
            }
            cout << endl;
        }
        cout << "'- " << setw(3*kolom+2) << " -'" << endl;
        cout << endl;
        system("pause");
    }

    else if(opsi==3){
        int tampung,matrikC[baris][kolom]={0,0,0,0};

        for(int a=0; a<kolom; a++){
            for(int b=0; b<baris; b++){
                for(int c=0; c<kolom; c++){
                    tampung=matrikA[a][c]*matrikB[c][b];
                    matrikC[a][b]=matrikC[a][b]+tampung;
                }
            }
        }

        cout << "Hasil perkalian matrik A dengan matrik B : \n";
        cout << ".- " << setw(3*kolom+2) << " -." << endl;
        for(int a=0; a<baris; a++){
            for(int b=0; b<kolom; b++){
                if(b==0){
                    cout << "|" << setw(3) << matrikC[a][b] << " ";
                }
                else if(b==kolom-1){
                    cout << " " << setw(3) << matrikC[a][b] << " |";
                }
                else{
                    cout << setw(3) << matrikC[a][b];
                }
            }
            cout << endl;
        }
        cout << "'- " << setw(3*kolom+2) << " -'" << endl;
        cout << endl;
        system("pause");
    }

    else if(opsi==4){
        cout << "Hasil determinan matrik B : \n";
        if(baris==2 && kolom==2){
            cout << "Determinan : " << matrikB[0][0]*matrikB[1][1]-matrikB[0][1]*matrikB[1][0];
        }
        else if(baris==3 && kolom==3){
            cout << "Determinan : " <<
            (matrikB[0][0]*matrikB[1][1]*matrikB[2][2]+matrikB[0][1]*matrikB[1][2]*matrikB[2][0]+matrikB[0][2]*matrikB[1][0]*matrikB[2][1])
            -
            (matrikB[0][2]*matrikB[1][1]*matrikB[2][0]+matrikB[0][0]*matrikB[1][2]*matrikB[2][1]+matrikB[0][1]*matrikB[1][0]*matrikB[2][2]);
        }
        else{
            cout << "Determinan hanya untuk order 2x2 atau 3x3 !";
        }
        cout << "\n\n";
        system("pause");
    }

    else if(opsi==5){
        cout << "Hasil transpose matrik A : \n";
        cout << ".- " << setw(3*kolom+2) << " -." << endl;
        for(int a=0; a<baris; a++){
            for(int b=0; b<kolom; b++){
            if(b==0){
                cout << "|" << setw(3) << matrikA[b][a] << " ";
            }
            else if(b==kolom-1){
                cout << " " << setw(3) << matrikA[b][a] << " |";
            }
            else{
                cout << setw(3) << matrikA[b][a];
            }
            }
            cout << endl;
        }
        cout << "'- " << setw(3*kolom+2) << " -'" << endl;
        system("pause");
    }

    }while(opsi<6 && opsi>0);

    return 0;
}
