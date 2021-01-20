#include <bits/stdc++.h>
using namespace std;
int main()
{
    int m, n;
    cout << "Enter rows and columns: ";
    cin >> m >> n;
    int nze = 0;

    int mat[m][n];
    cout << "Enter matrix elements" << "\n";
    for (int i = 0; i < m; i++)
    {
        for (int j = 0; j < n; j++)
        {
            cin >> mat[i][j];
        }
    }

    for (int i = 0; i < m; i++)
    {
        for (int j = 0; j < n; j++)
        {
            if (mat[i][j] != 0)
                nze++;
        }
    }

    if (nze < (m * n) / 2)
        cout << "Matrix is a sparse matrix" << "\n";
    else
        cout << "Matrix is not a sparse matrix" << "\n";

    return 0;
}