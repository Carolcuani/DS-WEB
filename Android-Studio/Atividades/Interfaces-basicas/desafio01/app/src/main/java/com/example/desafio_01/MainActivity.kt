package com.example.desafio_01

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.layout.*
import androidx.compose.material3.*
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.desafio_01.ui.theme.Desafio01Theme


class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            Desafio01Theme {
                Surface(
                    modifier = Modifier.fillMaxHeight().fillMaxWidth(),
                    color = Color(0xFF546E7A)
                ) {

                    Column(
                        verticalArrangement = Arrangement.Center,
                        horizontalAlignment = Alignment.CenterHorizontally
                    ) {
                        Text(
                            text = "",
                            style = TextStyle(
                                color = Color.White,
                                fontSize = 39.sp
                            )
                        )

                        Card(
                            modifier = Modifier
                                .padding(8.dp)
                                .size(180.dp)
                        ) {
                            Box(
                                modifier = Modifier.fillMaxSize(),
                                contentAlignment = Alignment.Center
                            ) {
                                Column(
                                    horizontalAlignment = Alignment.CenterHorizontally
                                ) {
                                    Text(text = "Nome: Ana")
                                    Text(text = "Telefone: (15) 99123-8765")
                                    Text(text = "Email: ana@gmail.com.br")
                                }
                            }
                        }


                        Spacer(modifier = Modifier.height(100.dp))

                        Card(
                            modifier = Modifier
                                .padding(8.dp)
                                .size(180.dp)
                        ) {
                            Box(
                                modifier = Modifier.fillMaxSize(),
                                contentAlignment = Alignment.Center
                            ) {
                                Column(
                                    horizontalAlignment = Alignment.CenterHorizontally
                                ) {
                                    Text(text = "Nome: Carol ")
                                    Text(text = "Telefone: (15) 99123-3456 ")
                                    Text(text = "Email: carol@gmail.com.br ")
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}









