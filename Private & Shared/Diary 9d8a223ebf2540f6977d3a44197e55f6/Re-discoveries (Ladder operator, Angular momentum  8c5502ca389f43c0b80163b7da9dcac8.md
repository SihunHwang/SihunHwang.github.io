# Re-discoveries (Ladder operator, Angular momentum coupling and Slater determinant)  - 01/03/2024

## Ladder operators

In QM course I was learning abstract angular momentum algebra. 

I wanted to find some general properties of ladder operators to be able to find them from an observable. And I discovered that ladder operator always have the following commutation relation with the corresponding observable. 

[Ladder operator theory .pdf](Re-discoveries%20(Ladder%20operator,%20Angular%20momentum%20%208c5502ca389f43c0b80163b7da9dcac8/Ladder_operator_theory_.pdf)

[Ladder operator theory .pdf](Re-discoveries%20(Ladder%20operator,%20Angular%20momentum%20%208c5502ca389f43c0b80163b7da9dcac8/Ladder_operator_theory_%201.pdf)

But it turned out to be well known results.

## Angular momenta coupling

In atomic physics, I was told that for 2 electron system, the quantum number of total spin angular momentum, S is 1 for symmetric and 0 for antisymmetric spin wavefunctions and quantum number $M_S$ of total spin $\hat{S_z}$ is sum of the indiviual quantum numbers for $m_{s1}$ and $m_{s2}$ without proof. So I tried with rasing and lowering operator:

[Quantum numbers of total spin of two electrons-compressed (1).pdf](Re-discoveries%20(Ladder%20operator,%20Angular%20momentum%20%208c5502ca389f43c0b80163b7da9dcac8/Quantum_numbers_of_total_spin_of_two_electrons-compressed_(1).pdf)

[Quantum numbers of total spin of two electrons-compressed (1).pdf](Re-discoveries%20(Ladder%20operator,%20Angular%20momentum%20%208c5502ca389f43c0b80163b7da9dcac8/Quantum_numbers_of_total_spin_of_two_electrons-compressed_(1)%201.pdf)

also we learnt that in general abstract angular momentum operator theory, if  $\bold{\hat{j}} = \bold{\hat{j}_1} + \bold{\hat{j}_2}$ then the range of possible total quantum number j is $|j_1 - j_2 | \leq j \leq j_1 + j_2$  without proof. So I tried but this one i had to look it up. I learnt a lot of algebra from this.

[Quantum numbers of coupled angular momentum .pdf](Re-discoveries%20(Ladder%20operator,%20Angular%20momentum%20%208c5502ca389f43c0b80163b7da9dcac8/Quantum_numbers_of_coupled_angular_momentum_.pdf)

[Quantum numbers of coupled angular momentum .pdf](Re-discoveries%20(Ladder%20operator,%20Angular%20momentum%20%208c5502ca389f43c0b80163b7da9dcac8/Quantum_numbers_of_coupled_angular_momentum_%201.pdf)

In atomic physics problem sheet 2 there was a question asking for a general form of the 3 particle spatial wavefunction which is antisymmetric under exchange operators (eigenvalue = -1). after long guesstimation I found the answer and it looked like a determinant of a matrix. 

![Screenshot 2024-05-04 at 10.59.20 am.png](Re-discoveries%20(Ladder%20operator,%20Angular%20momentum%20%208c5502ca389f43c0b80163b7da9dcac8/Screenshot_2024-05-04_at_10.59.20_am.png)

And my epiphany was that if given state is a determinant then the effect of exchange operator that exchanges ith and jth particles is essentially swapping ith and jth row. Swapping rows means multiplying by -1 hence antisymmetric.