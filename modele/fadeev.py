import numpy as np


def generateurDeMatriceAleatoire(dimension=3,min=0,max=1):
	return np.random.randn(dimension,dimension) * (max - min +1) + min

def methodeTraces(A1,A=None,B=None,n=1):
	#verifier que le det != 0 + expliquer la fonction det si elle existe sinon la faire
	print("[",n,"]")
	if np.linalg.det(A1) != 0.:
		if n==1:
			q = np.trace(A1)	#expliquer trace
			B = A1 - np.dot(q,np.identity(len(A1))) #expliquer dot et identity
		else:
			A = np.dot(A1,B)
			q = np.trace(A)/n
			
			Bold = B
			B = A - np.dot(q,np.identity(len(A)))

		print("Qn : \n",q)
		if n > 1:	
			print("An : \n",A)
			print("Bn-1 : \n",B)
		print("Bn : \n",B)

		if B.all() == 0:

			return np.divide(Bold,q)
		else:	
			return methodeTraces(A1,A,B,n+1)
	else:
		print("Déterminant == 0")
		return None



mat = generateurDeMatriceAleatoire(dimension = 50,min=0,max=5)
print("Matrice : \n",mat)
print("Déterminant : ",np.linalg.det(mat))
i = np.linalg.inv(mat)
print("Correction : \n",i)

j = methodeTraces(mat)
print("Résultat : \n",j)


if i.any() == j.all():
	print("OK")
