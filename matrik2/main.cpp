#include <iostream>

using namespace std;

int main()
{
    int kolom,baris;
    cout << "Masukan jumlah baris : "; cin >> baris;
    cout << "Masukan jumlah kolom : "; cin >> kolom;

    int matrikA[baris][kolom],matrikB[baris][kolom];

    for(int a=0; a<baris; a++){
        for(int b=0; b<kolom; b++){
            cout << "Masukan matrik A indek ke-["<<a<<"]["<<b<<"] : "; cin >> matrikA[a][b];
        }
    }

    cout << endl;

    for(int a=0; a<baris; a++){
        for(int b=0; b<kolom; b++){
            cout << "Masukan matrik B indek ke-["<<a<<"]["<<b<<"] : "; cin >> matrikB[a][b];
        }
    }

    cout << endl;

    for(int a=0; a<baris; a++){
        for(int b=0; b<kolom; b++){
            cout << matrikA[a][b] << " ";
        }
        cout << "\t";
        for(int b=0; b<kolom; b++){
            cout << matrikB[a][b] << " ";
        }
        cout << endl;
    }


    return 0;
}
